<?php
function vtBaglan(){
$sunucu = "localhost";
$vtkullanici = "root";
$vtsifre = "";
$vt = "randevusistem";

$bag = mysqli_connect($sunucu,$vtkullanici,$vtsifre,$vt);
if($bag){
    return $bag;
}

else{
    return 0;
}
}
