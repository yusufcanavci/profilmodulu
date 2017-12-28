<?php


	$UniIsim = $_POST['uniad'];
	$bolum = $_POST['bolum'];
	$anadal = $_POST['anadal'];
	$egitim = $_POST['egitim'];
	$mayaki = $_POST['mayaki'];
	$website = $_POST['website'];
	$email = $_POST['email'];
	$socialmedia = $_POST['socialmedia'];
	$telephone = $_POST['telephone'];
	$baglan = mysqli_connect("localhost", "root", "", "uyeprofil");
	mysqli_set_charset ($baglan, "utf8");
	$aktar = "UPDATE ozellikler SET UniIsim = '$UniIsim',Bolum ='$bolum',AnaDal='$anadal',EgitimBilgileri='$egitim',MakYaKi='$mayaki',WebSite='$website',Mail='$email',SosyalMedya='$socialmedia',Telefon='$telephone'";
	
	
	$sonuc=mysqli_query($baglan,$aktar);
	if ($sonuc==0){
		echo "eklenemedi";
		
	}else{
		echo "eklendi";
	};

	

	
?>