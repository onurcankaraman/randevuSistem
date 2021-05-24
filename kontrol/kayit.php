<?php
/*
"
'adiniz' : adiniz,
'okulunuz' : okulunuz,
'eposta' : eposta,
'kullaniciadi' : kullaniciadi,
'sifre' : sifre,
"
*/

$adiniz = $_REQUEST["adiniz"];
$okulunuz = $_REQUEST["okulunuz"];
$eposta = $_REQUEST["eposta"];
$kullaniciadi = $_REQUEST["kullaniciadi"];
$sifre = $_REQUEST["sifre"];
/*
echo $adiniz;
echo $okulunuz;
echo $eposta;
echo $kullaniciadi;
echo $sifre;*/

if($adiniz and $okulunuz and $eposta and $kullaniciadi and $sifre != null){
    require_once('kontrol.php');
    $kontrol = new kontrol();
    $kullanici = $kontrol -> kullaniciKayit($adiniz, $okulunuz, $eposta, $kullaniciadi, $sifre);
    echo $kullanici;
}
else{
    echo "Eksik Giriş Yaptınız";
}
?>