<?php


$baglan = mysqli_connect("localhost", "root", "", "uyeprofil");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="ayar.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
</head>
<body>
	<div class="ust">
	<h1> KOCAELİ ÜNİVERSİTESİ-İNTERNET PROGRAMCILIĞI DERSİ</h1>
	 <b>Profil Modülü</b>
	</div>
	<div class="menu">
	
	
	<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'><span>KULLANICI BİLGİLERİ</span></a></li>
   <li><a href='index.php?git=hakkimda'><span>HAKKIMDA</span></a></li>
   <li><a href='index.php?git=iletisim'><span>İLETİŞİM BİLGİLERİ</span></a></li>
   <li class='last'><a href='index.php?git=profilduzenle'><span>PROFİLİ DÜZENLE</span></a></li>
</ul>
</div>
	
	
	
	</div>
	<div class="icerik">
	<?php 
	 $a = @$_GET["git"];
	
	switch($a){
		
		case "hakkimda":
		include("hakkimda.php");
		break;
		
		case "iletisim":
		include("iletisim.php");
		break;
		
		case "profilduzenle" :
		include ("profilduzenle.php");
		break;
		
		default :
		include ("anasayfa.php");
		break;
	}
	
	?>
	
	
	
	</div>
	<div class="footer">
	Yusuf Can Avcı - 150202020
	</div>
</body>
</html>