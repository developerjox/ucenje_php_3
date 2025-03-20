<?php

$naslov = "Postani programer";

$linkovi = [
  "Glavna" => ["Glavna", "home.php"],
  "O nama" => ["O nama", "about_us.php"],
  "Kontakt" => ["Kontakt", "contact.php"]
];

$trenutnaGodina = date("Y");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $naslov; ?></title>
</head>
<body>
  <h1><?php echo $naslov; ?></h1>
  <nav>
    <a href="<?php echo $linkovi["Glavna"][1]?>"><?php echo $linkovi["Glavna"][0]?></a>
    <a href="<?php echo$linkovi["O nama"][1]?>"><?php echo $linkovi["O nama"][0]?></a>
    <a href="<?php echo $linkovi["Kontakt"][1]?>"><?php echo $linkovi["Kontakt"][0]?></a>
  </nav>
  <p>Copyright © moj sajt <?php echo $trenutnaGodina ?></p>
</body>
</html>