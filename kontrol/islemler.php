<?php
require_once("degiskenler.php");

if($_REQUEST['sorguKodu'] == "1"){
	$kullaniciAdi = $_REQUEST['kullaniciAdi'];
	$sifre = $_REQUEST['sifre'];
	$sql = "Select * from kullanicilar where kullaniciAdi = '$kullaniciAdi' and sifre = '$sifre'";
	$sonuc = mysqli_query($bag, $sql);
	while($satir = mysqli_fetch_array($sonuc)){
		if($satir["kullaniciAdi"] == $kullaniciAdi and $satir["sifre"] = $sifre){
			$_SESSION["kullaniciAdi"] = $kullaniciAdi;
			$_SESSION["sifre"] = $sifre;
			echo "1";
		}
	}
}
