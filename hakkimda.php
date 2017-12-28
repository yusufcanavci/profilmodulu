<?php
$baglan=mysqli_connect("localhost","root","","uyeprofil");
$sonuc=mysqli_query($baglan,"select * from ozellikler"); 
mysqli_set_charset($baglan, "utf8");
 
while($satir=mysqli_fetch_array($sonuc))
{
echo '<tr>';
echo "Üniversite İsmi: ";
echo '<td>'.$satir['UniIsim'].'</td>'; 
echo "<br/>";
echo "Bölüm Adı:";
echo '<td>'.$satir['Bolum'].'</td>';
echo "<br/>";
echo "Ana Dal:";
echo '<td>'.$satir['AnaDal'].'</td>';
echo "<br/>";
echo "Eğitim Bilgileri:";
echo '<td>'.$satir['EgitimBilgileri'].'</td>';
echo "<br/>";
echo "Makale Yayın ve Kitaplar:";
echo '<td>'.$satir['MakYaKi'].'</td>';
echo "<br/>";
 
echo '</tr>';
}
?>