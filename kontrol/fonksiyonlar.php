<?php
require_once("degiskenler.php");
function randevuGetir($bag, $kullaniciAdi){
	$sayac = 1;
	$sql = "select mentorler.adi, tarihler.baslangicTarihi, randevular.link, kullanicilar.kullaniciAdi from randevular, kullanicilar, mentorler,tarihler WHERE kullanicilar.id = randevular.kullanici and randevular.tarih = tarihler.id and tarihler.mentorId = mentorler.id and kullanicilar.kullaniciAdi = '$kullaniciAdi'";
	$sonuc =  mysqli_query($bag, $sql);
	while($satir = mysqli_fetch_array($sonuc)){
		echo '<div class="col-lg-4 col-md-6">
            <div class="card card-block card-stretch card-height">
                <div class="card-body rounded event-detail event-detail-info">
                    <div class="d-flex align-items-top justify-content-between">
                        <div>
                            <h4 class="mb-2 mr-4">Network Toplantınız #'.$sayac.'</h4>                                        
                            <p class="mb-2 text-info font-weight-500 text-uppercase"><i class="las la-user pr-2"></i>'.$satir[0].' ile</p>
                            <p class="mb-4 card-description">Kalder Üyesinin Özellikleri Buraya Eklenecek. Üzerine Konuşabilirsiniz</p>
                            <div class="d-flex align-items-center pt-4">
                                <a href="#" class="btn btn-info mr-3 px-xl-4">'.$satir[1].'</a>
                                <a href="'.$satir[2].'" class="btn btn-outline-info copy px-xl-4" data-extra-toggle="copy" title="Copy to clipboard" data-toggle="tooltip"><i class="las la-link pr-2"></i>Toplantıya Git</a>
                                <a href="'.$satir[2].'" class="btn btn-outline-info d-none turn-on px-xl-4">Turn On</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
	}
}

/**
 * @param $iText
 * @param $format
 * @return string
 */
function reverseDate($iText, $format){
    $iLen = strlen($iText);
    if($iLen == 5 OR $iLen == 10 OR $iLen == 19){
        if(strtotime($iText) == TRUE){
            $iDate = new DateTime($iText);
            $lastData = $iDate->format($format);
            $mText = $lastData;
        }
        else {
            $mText = $iText;
        }
    }
    else {
        $mText = $iText;
    }
    return $mText;
}