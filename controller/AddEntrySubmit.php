<?php
require_once('classes/ReturnObject.php');

$return = new ReturnObject();

if( isset($_POST['e_token']) && $_POST['e_token'] == 1){
	$return->setStatus(200);
	$return->setMessage( "Successfully saved !" );
	
	
	
	
}else{
	$return->setStatus( 500 );
	$return->setMessage( "Internal Error" );
}

echo json_encode( $return );