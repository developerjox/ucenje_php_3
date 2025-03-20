<?php

$osobe = [
[
   "ime" => "Jovan",
  "prezime" => "Stankovic",
  "godiste" => 2006
],
  [
  "ime" => "Teodora",
  "prezime" => "Jovanovic",
  "godiste" => 2006
  ]
];

$trenutnagodina = date('Y');
$godista = array_column($osobe, "godiste");
var_dump($godista);
$JovanGodiste = $trenutnagodina - $osobe[0]['godiste'];
echo $JovanGodiste;
echo $osobe[1]["prezime"];
?>