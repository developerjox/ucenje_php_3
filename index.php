<?php

//              umesto indeksa 0 => "ime"
$informacije = [
  "Jovan", 
  "Stankovic", 
  18
];

//echo $informacije[0];
$osoba = [
  "ime" => "Jovan",
  "prezime" => "Stankovic",
  "godine" => 18, //key(associjacija) => value(vrednost)
];
echo $osoba["ime"];
echo $osoba["prezime"];
echo $osoba["godine"];
echo "<br>";

$automobili = [
  // "zastava"   0         1         2
  "Zastava" => ["Yugo", "Scala", "101"]
];

//echo $automobili["Zastava"][1];

$osobe = [
  "Jox" => [
    "prezime" => "Stankovic",
    "godine" => "18",
    "programer" => true,
    "pravo_ime" => "Jovan"
  ],
  "Petar" => [
    "prezime" => "Jovanovic",
    "godine" => 34,
    "programer" => false,
    "pravo_ime" => "Petar",
    "jmbg" => 81020122112
  ],
];

$Jelena = [
  "prezime" => "Mitrovic",
  "godine" => 16,
  "programer" => true,
  "pravo_ime" => "Jelena",
  "jmbg" => 81020122112
];

$osobe["Jelena"] = [
  "prezime" => "Mitrovic",
  "godine" => 16,
  "programer" => true,
  "pravo_ime" => "Jelena"
];

echo "Ja se zovem {$osobe['Jelena']['pravo_ime']}, a prezivam se {$osobe['Jelena']['prezime']}";
$imena = array_keys($osobe);
var_dump($imena);
echo "<br>";
$prezimena = array_column($osobe, "prezime");
var_dump($prezimena);

?>