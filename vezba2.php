<?php

$user = [
  "name" => "Jovan",
  "lastname" => "Stankovic",
  "age" => 19
];

$userA = [];

$userA["age"] = 20;


$data = [
  "model" => "PC", 
  "version" => 2.0, 
  "price" => 999
];

unset($data["model"]);

var_dump($data);
echo "<br>";
var_dump($userA);
?>