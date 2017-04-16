<?php
   // error_reporting (E_ALL^ (E_NOTICE|E_WARNING));
    //$QueryState = $_GET['state'];
    //$QueryCity = str_replace(' ', '_', $_GET['city']);

    $json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/mugassari.json");   
    $json_a = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/banyumanik.json");   
    $json_aa = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/candisari.json");   
    $json_ab = json_decode($json_string);

	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/gajahmungkur.json");   
    $json_ac = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/gayamsari.json");   
    $json_ad = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/genuk.json");   
    $json_ae = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/gunungpati.json");   
    $json_af = json_decode($json_string);

	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/mijen.json");   
    $json_ag = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/ngaliyan.json");   
    $json_ah = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/pedurungan.json");   
    $json_ai = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/tembalang.json");   
    $json_aj = json_decode($json_string);
	
	$json_string = file_get_contents("http://api.wunderground.com/api/a657d7d2ba430b38/conditions/q/ID/tugu.json");   
    $json_ak = json_decode($json_string);
	
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
	
	$citya = $json_aa->{"response"}->results[0]->{"city"};
	
	$cityab = $json_ab->{"response"}->results[0]->{"city"};
	
	$cityac =$json_ac->{"response"}->results[0]->{"city"};
	
	$cityad =$json_ad->{"response"}->results[0]->{"city"};

	$cityae =$json_ae->{"response"}->results[0]->{"city"};
	
	$cityaf =$json_af->{"current_observation"}->{"display_location"}->{"city"};
	
	$cityag =$json_ag->{"response"}->results[0]->{"city"};
	
	$cityah =$json_ah->{"response"}->results[0]->{"city"};
	
	$cityai =$json_ai->{"current_observation"}->{"display_location"}->{"city"};
	
	$cityaj =$json_aj->{"current_observation"}->{"display_location"}->{"city"};
	
	$cityak =$json_ak->{"response"}->results[1]->{"city"};


    $conditions = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"conditions"};
    $icon = $json_b->{"forecast"}->{"simpleforecast"}->forecastday[0]->{"icon"};
  
  echo "<h2>Semarang</h3>";
  echo "<br>";
  echo "<h3>$hari</h3>";
   
    
	

?>