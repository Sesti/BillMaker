<?php

	require_once( '../config.php' );
	
	use League\Csv\Exception;
	use League\Csv\Reader;

	$data = array();
	
	$path = ROOT_PATH . '/bin/entries.csv';
	$openingMode = 'r';
	$csv = Reader::createFromPath( $path, $openingMode );
	$csv->setHeaderOffset( 0 );
	$header_offset = $csv->getHeaderOffset(); //returns 0
	$header = $csv->getHeader();
	$records = $csv->getRecords();
	
	array_push($data,$header);
	foreach ( $records as $offset => $record ) {
		array_push( $data, $record );
	}

	echo json_encode($data);
