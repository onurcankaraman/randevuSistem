<?php
$kullanici = $_REQUEST["kullaniciadi"];
$sifre = $_REQUEST["sifre"];

if($kullanici and $sifre != null){
    require_once('kontrol.php');
    $giris = new kontrol();
    $kullanici = $giris -> girisKontrol($kullanici,$sifre);
    if($kullanici[4] == $kullanici and $kullanici[5] == $sifre){
        return 1;
    }
    else{
        return 0;
    }
}