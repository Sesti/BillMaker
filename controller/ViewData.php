<?php

	require_once( '../config.php' );
	
	use League\Csv\Exception;
	use League\Csv\Reader;
	
	$path = ROOT_PATH . '/bin/entries.csv';
	$openingMode = 'r';
	$csv = Reader::createFromPath( $path, $openingMode );
	$csv->setHeaderOffset( 0 );
	$header_offset = $csv->getHeaderOffset(); //returns 0
	$header = $csv->getHeader();
	$records = $reader->getRecords();
	foreach ( $records as $offset => $record ) {
	
	}
?>