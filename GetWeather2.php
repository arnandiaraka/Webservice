<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/forecast10day/q/ID/mugassari.json");   
    $json_b = json_decode($json_string);

        //pencarian variabel
	$hari = $json_a->{"current_observation"}->{"local_time_rfc822"};
	$fahrenheit = $json_a->{"current_observation"}->{"temp_f"};
	$celcius = $json_a->{"current_observation"}->{"temp_c"};
	$wind =  $json_a->{"current_observation"}->{"wind_kph"};
	$pressure = $json_a->{"current_observation"}->{"pressure_in"};
	$weather = $json_a->{"current_observation"}->{"weather"};
	$icon = $json_a->{"current_observation"}->{"icon"};
	$url = $json_a->{"current_observation"}->{"icon_url"};
	
	
    $conditions = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
    $icon = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};

	echo "<h3><center>$hari</center></h3>";
	echo "<center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></center>";
	echo "<center>$weather</center>";
	echo "<br>";
	echo "<br>";


?>