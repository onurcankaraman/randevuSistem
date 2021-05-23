<?php
class kontrol{
    public $bag;
    public $kullanici;
    function vtbaglan(){
        require_once('degiskenler.php');
        $bag = mysqli_connect($sunucu,$vtKadi,$vtSifre,$vtAdi);
        if($bag){
            $this -> bag = $bag;
            return $bag;
        }
        else{
            echo "Veri Tabanı Bağlantı Hatası" ; 
        }
    }
    function kullaniciKayit($adiniz, $okulunuz, $eposta, $kullaniciadi, $sifre){
        $bag = $this -> vtbaglan();
        $sql = "insert into kullanicilar 
        (name, okul, eposta, kullaniciAdi, sifre) 
        VALUES ('$adiniz','$okulunuz','$eposta','$kullaniciadi','$sifre')";
        $sonuc = mysqli_query($bag,$sql);
        if($sonuc){
            return "Basarili";
        }
        else{
            return "Başarısız";
        }
    }
}
