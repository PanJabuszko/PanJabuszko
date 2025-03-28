<?php

require('tcpdf/tcpdf.php');

$imie = htmlspecialchars($_POST['imie']);
$nazwisko = htmlspecialchars($_POST['nazwisko']);
$wynik = intval($_POST['wynik']);

$motivationalQuotes = [
    "Programowanie to supermoc XXI wieku!",
    "Każdy wielki programista zaczynał od pierwszego kodu.",
    "Twórz, rozwiązuj, inspiruj - świat potrzebuje programistów!",
    "Kod to poezja logicznego myślenia.",
    "Błędy to tylko okazje do nauki nowych rzeczy."
    ];

$pdf = new TCPDF('L', 'pt', 'A4', true, 'UTF-8', false);

$pdf -> setMargins(25, 40, 25);
$pdf -> setTitle('Dyplom Mistrza Programowania');
$pdf -> setAuthor('Zespol Szkol Elektrycznych');

?>