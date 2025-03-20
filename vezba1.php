<?php

$automobili = [
  "marka" => "Audi",
  "model" => "A4",
  "godiste" => 2004
];

echo "Prodajem automobil " . $automobili["marka"] . " " . $automobili["model"] . " proizveden " . $automobili["godiste"];
echo "Prodajem automobil {$automobili['marka']} {$automobili['model']} proizveden {$automobili['godiste']}";

?>