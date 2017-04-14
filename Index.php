
<html>
	<head>
        <link href="css/style.css" rel="stylesheet">
        <style type="text/css">
          body {
            background-repeat: no-repeat;
            padding-top: 30px;
            padding-bottom: 20px;
          }
        </style>
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<title>WEATHER APP</title>
	<h2 align=center>Prakiraan Cuaca Hari ini di Kota Semarang</h2><br>
			
	</head>
	<body>
	<?php
    require 'GetWeather2.php';
?>
        <div align=center>
			<form action="conditions.php" method="get">
			<input class="btnForm" type="submit" name="submit" value="Cek Daerahku"/>
			</form>
		</div>
	</body>
</div>
</html>