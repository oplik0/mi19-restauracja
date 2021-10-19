<?php
echo "Dodano rezerwację do bazy";
$db = new mysqli('localhost', 'root', '', 'baza');
$telefon = $db->real_escape_string($_POST['telefon']);
$data = $db->real_escape_string($_POST['data']);
$ilosc = $db->real_escape_string($_POST['ilosc']);
$db->query("INSERT INTO `rezerwacje` (`data_rez`, `liczba_osob`, `telefon`) VALUES ('$data', $ilosc, $telefon)");

$db->close();