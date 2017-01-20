<?php
	function reverse($num) {
    switch ($num) {
      case 1:
        return 5;
      case 2:
        return 4;
      case 3:
        return 3;
      case 4:
        return 2;
      case 5:
        return 1;
      default:
        return $num;
    }
  }

  function extraversion() {
    $res = $_POST["bfi1"]
      + reverse($_POST["bfi6"])
      + $_POST["bfi11"]
      + $_POST["bfi16"]
      + reverse($_POST["bfi21"])
      + $_POST["bfi26"]
      + reverse($_POST["bfi31"])
      + $_POST["bfi36"];
    if ($res > 0) {
    	return $res/8;
    } else {
    	return $res;
    }
  }

  function agreeableness() {
    $res = reverse($_POST["bfi2"])
      + $_POST["bfi7"]
      + reverse($_POST["bfi12"])
      + $_POST["bfi17"]
      + $_POST["bfi22"]
      + reverse($_POST["bfi27"])
      + $_POST["bfi32"]
      + reverse($_POST["bfi37"])
      + $_POST["bfi42"];
    if ($res > 0) {
    	return $res/9;
    } else {
    	return $res;
    }
  }

  function conscientiousness() {
    $res = $_POST["bfi3"]
      + reverse($_POST["bfi8"])
      + $_POST["bfi13"]
      + reverse($_POST["bfi18"])
      + reverse($_POST["bfi23"])
      + $_POST["bfi28"]
      + $_POST["bfi33"]
      + $_POST["bfi38"]
      + reverse($_POST["bfi43"]);
    if ($res > 0) {
    	return $res/9;
    } else {
    	return $res;
    }
  }

  function neuroticism() {
    $res = $_POST["bfi4"]
      + reverse($_POST["bfi9"])
      + $_POST["bfi14"]
      + $_POST["bfi19"]
      + reverse($_POST["bfi24"])
      + $_POST["bfi29"]
      + reverse($_POST["bfi34"])
      + $_POST["bfi39"];    
    if ($res > 0) {
    	return $res/8;
    } else {
    	return $res;
    }
  }

  function openness() {
    $res = $_POST["bfi5"]
      + $_POST["bfi10"]
      + $_POST["bfi15"]
      + $_POST["bfi20"]
      + $_POST["bfi25"]
      + $_POST["bfi30"]
      + reverse($_POST["bfi35"])
      + $_POST["bfi40"]
      + reverse($_POST["bfi41"])
      + $_POST["bfi44"];
    if ($res > 0) {
    	return $res/10;
    } else {
    	return $res;
    }
  }

  function saveInformation() {
  	$id = "ID"; // TODO
  	$file = "data/subject information/ID.txt";
  	$current = file_get_contents($file);
		$current = $_POST["name"] . PHP_EOL
			. $_POST["age"] . PHP_EOL
			. "gender" . PHP_EOL // TODO
			. $_POST["email"] . PHP_EOL;
		file_put_contents($file, $current);
  }

  function addToCSV() {
  	$id = "ID"; // TODO
  	$handle = fopen("data/data.csv", "a");
  	$line = array(
  		$id,
  		$_POST["age"],
  		'gender', // TODO
  		(int) (extraversion()*100/5),
  		(int) (agreeableness()*100/5),
  		(int) (conscientiousness()*100/5),
  		(int) (neuroticism()*100/5),
  		(int) (openness()*100/5));
		fputcsv($handle, $line);
		fclose($handle);
  }

?>