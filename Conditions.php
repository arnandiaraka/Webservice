<html>
	<head>
	<title>WEATHER APP</title>
	<h1>Kondisi Cuaca</h2>
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
<td align=center>Banyumanik</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Candisari</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Gajahmungkur</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Gayamsari</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Genuk</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Gunungpati</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Mijen</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Ngaliyan</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Pedurungan</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Tembalang</td>
<td align=center>$fahrenheit</td>
<td align=center>$celcius</td>
<td align=center>$wind</td>
<td align=center>$pressure</td>
<td align=center>$weather</td>
<td align=center><img src='http://icons.wxug.com/i/c/k/" . $icon . ".gif'></td>
</tr>
<tr>
<td align=center>Tugu</td>
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