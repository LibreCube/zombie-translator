<?php
	if(!is_numeric(str_replace("-", "", $_GET["zversion"])))
	{
		$returnArray = array("error" => "Not numeric version value.");
	
		echo json_encode($returnArray);	
		exit;
		
	}
	
	$langpack = array();

	$lines = file("langpack/".$_GET["zversion"].".cfg", FILE_SKIP_EMPTY_LINES);
	foreach($lines as $line)
	{
		$line = trim($line);
		$line = substr($line, 1, -1); // get ride of the " and the start and of the end
		
		$values = explode('" "', $line);
		
		if (strpos($values[0], "_EN") !== false) {
				
			//print_r($values); echo "<br>";
			$langpack[$values[0]] = $values[1];
		}
	} 

	$returnArray = array("zversion" => $_GET["zversion"], "zlangpack" => $langpack);
	
	echo json_encode($returnArray);
	
?>