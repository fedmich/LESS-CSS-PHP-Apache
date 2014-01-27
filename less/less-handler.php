<?php
	require_once( dirname(__FILE__)."/lessc.inc.php" );

	$input = $_SERVER["PATH_TRANSLATED"];

	$lc = new lessc($input);

	try{
		header("Content-Type: text/css");
		print $lc->parse();
	} catch (exception $ex){
		print "LESSC FEHLER:";
		print $ex->getMessage();
	}