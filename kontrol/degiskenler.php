<?php
session_start();
require_once('vt.php');

/* GLOBAL DEĞİŞKENLER */
$bag = vtBaglan();

$kullaniciAdi = $_SESSION["kullaniciAdi"];

