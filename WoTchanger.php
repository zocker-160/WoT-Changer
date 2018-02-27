<?php	
/**
	if(empty($argv[1])){ 
		echo "bitte Dateipfad angeben!";
		exit;
	}
*/	
	$pfad = getcwd().'\WoTLauncher.cfg';

	if(simplexml_load_file($pfad) != false){
		$handle = simplexml_load_file($pfad);	
		
		//$handle = simplexml_load_file($argv[1]);	
		//print_r($handle);	
		$handle->launcher_transport = 2;	
		$handle->asXML($pfad);	
		echo "success!";
		sleep(1);
	}else{
		echo "\n \n";
		echo "ERROR: could not find ".$pfad." \n";	
		sleep(5);
	}
?>
