<html>
	<head>
	<title>WEATHER APP</title>
	<h1>Kondisi Cuaca Di Beberapa Tempat</h2>
	</head>
	
	<body>
<?php
    require 'GetWeather.php';
?>
<?php
echo "<br>";
echo "<table width = 700 border =1>
<tr bgcolor=00fffff>
<td align=center>Nama Daerah</td>
<td align=center>Derajat Fahrenheit</td>
<td align=center>Derajat Celcius</td>
<td align=center>Kecepatan Angin</td>
<td align=center>Tekanan Udara</td>
<td align=center>Kondisi</td>
<td align=center>Icon</td>
</tr>
<tr>
<td align=center>$citya</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityab</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityac</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityad</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityae</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityaf</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityag</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityah</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityai</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityaj</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>$cityak</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
</table>";
?>
	</body>


	<br></br>
	<form action="Index.php" method="get">
		<input class="btnForm" type="submit" name="submit" value="Selesai"/>
	</form>
</html>