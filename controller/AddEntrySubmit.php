<?php
require_once('classes/ReturnObject.php');
require_once('../config.php');

use League\Csv\Exception;
use League\Csv\Reader;
use League\Csv\Writer;

$return = new ReturnObject();

if( isset($_POST['e_token']) && $_POST['e_token'] == 1){
	$return->setStatus(200);
	$return->setMessage( "Successfully saved !" );
	
	try{
		$csv = Writer::createFromPath( ROOT_PATH.'/bin/entries.csv', 'a+');
		$csv->insertOne([$_POST['e_date'], $_POST['e_time'], $_POST['e_client'], $_POST['e_description']]);
	}catch ( Exception | RuntimeException $e){
	
	}
	
	
}else{
	$return->setStatus( 500 );
	$return->setMessage( "Internal Error" );
}

echo json_encode( $return );