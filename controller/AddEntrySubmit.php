<?php
require_once('classes/ReturnObject.php');
require_once('classes/DataContainer.php');
require_once('../config.php');

use League\Csv\Exception;
use League\Csv\Writer;

$return = new ReturnObject();

if( isset($_POST['e_token']) && $_POST['e_token'] == 1){
	
	$dir            = ROOT_PATH . '/bin';
	$file           = 'entries.csv';
	$path           = $dir . '/' . $file;
	$openingMode    = 'a+';
	$return->setStatus( 500 );
	$return->setMessage( "Internal Error" );
	
	/* Check if the folder that contains the csv exists */
	if ( is_dir( $dir ) === false ) {
		mkdir( $dir );
	}
	
	/* Check if the file exists, if not create it with header */
	if( !file_exists($path)){
		$csv = Writer::createFromPath( $path, $openingMode );
		$csv->insertOne( ["Date", "Time", "Client", "Description"] );
	}
	
	$dataContainer = new DataContainer();
	
	/* Check the date */
	$pattern = '/\d{4}-\d{2}-\d{2}/';
	if (isset($_POST['e_date']) && preg_match( $pattern, $_POST['e_date'],$matches )){
		$dataContainer->setDate($_POST['e_date']);
	}else{
		$return->send();
	}
	
	/* Check the time */
	$pattern = '/^\d{1,2}$/';
	if (isset( $_POST['e_time']) && preg_match( $pattern, $_POST['e_time'], $matches ) ) {
		$dataContainer->setTime( $_POST['e_time'] );
	} else {
		$return->send();
	}
	
	/* Check the client */
	if( isset($_POST['e_client']) && !empty($_POST['e_client']) && $_POST['e_client'] != ""){
		$dataContainer->setClient( $_POST['e_client'] );
	}else{
		$return->send();
	}
	
	$dataContainer->setDescription( $_POST['e_description'] );
	
	
	try{
		$csv = Writer::createFromPath( $path, $openingMode);
		$csv->insertOne([$dataContainer->getDate(),
		                 $dataContainer->getTime(),
		                 $dataContainer->getClient(),
		                 $dataContainer->getDescription()]);
	}catch ( Exception | RuntimeException $e){
		$return->setMessage( $e->getMessage() );
	}
	
	
	$return->setStatus( 200 );
	$return->setMessage( "Successfully saved !" );
	
}else{
	$return->setStatus( 500 );
	$return->setMessage( "Internal Error" );
}

$return->send();