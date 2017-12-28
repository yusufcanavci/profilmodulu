<?php

$baglan=mysqli_connect("localhost","root","","uyeprofil"); 
mysqli_set_charset($baglan, "utf8");
$sql="select * from ozellikler WHERE uyeID=150202020";
$sonuc1= mysqli_query($baglan,$sql);
$satirsay=mysqli_num_rows($sonuc1);

if ($satirsay>0)
{
    $satir = mysqli_fetch_array($sonuc1);
<table border="1" align="center">
<tr>
<td colspan="2" align="center"> Kayıt Güncelleme</td>

<td><input type="text" name ="uniad";/> </td>
<td><input type="text" name ="bolum";/></td>
<td><input type="text" name ="anadal";/></td>
<td><input type="text" name ="egitim";/></td>
<td><input type="text" name ="mayaki";/></td>
<td><input type="text" name ="website";/></td>
<td><input type="text" name ="email";/></td>
<td><input type="text" name ="socialmedia";/></td>
<td><input type="number_format" name ="telephone";/></td>
<td><input type ="submit" name= "kaydet" /></td>
}else
{
	echo "bulunamadi";
}

?>