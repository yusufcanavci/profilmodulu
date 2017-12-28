<h1>İLETİŞİM</h1>

<?php
$baglan=mysqli_connect("localhost","root","","uyeprofil");
$sonuc=mysqli_query($baglan,"select * from ozellikler"); 
mysqli_set_charset($baglan, "utf8");
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo "Web Sitesi: ";
echo '<td>'.$satir['Website'].'</td>'; 
echo "<br/>";
echo "Telefon Numarası:";
echo '<td>'.$satir['Telefon'].'</td>';
echo "<br/>";
echo "E-Posta Adresi:";
echo '<td>'.$satir['Mail'].'</td>';
echo "<br/>";
echo "Sosyal Medya Adresleri:";
echo '<td>'.$satir['SosyalMedya'].'</td>';
echo "<br/>";

 
echo '</tr>';
}
?>