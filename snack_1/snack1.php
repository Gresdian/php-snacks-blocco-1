<?php

   $matches = [
      [
         "casa" => "Brescia",
         "ospite" => "Venezia",
         "casaPunti" => 29,
         "ospitePunti" => 32
      ],
      [
         "casa" => "Virtus Bologna",
         "ospite" => "Reggio Emilia",
         "casaPunti" => 40,
         "ospitePunti" => 51
      ],
      [
         "casa" => "Virtus Bologna",
         "ospite" => "Treviso",
         "casaPunti" => 30,
         "ospitePunti" => 20
      ],
      [
         "casa" => "Brescia",
         "ospite" => "Virtus Bologna",
         "casaPunti" => 42,
         "ospitePunti" => 33
      ],
      [
         "casa" => "Venezia",
         "ospite" => "Napoli",
         "casaPunti" => 53,
         "ospitePunti" => 51
      ],
      [
         "casa" => "Reggio Emilia",
         "ospite" => "Brescia",
         "casaPunti" => 51,
         "ospitePunti" => 51
      ],
      [
         "casa" => "Olimpia Milano",
         "ospite" => "Napoli",
         "casaPunti" => 63,
         "ospitePunti" => 69
      ],
      [
         "casa" => "Olimpia Milano",
         "ospite" => "Cremona",
         "casaPunti" => 59,
         "ospitePunti" => 60
      ],
      [
         "casa" => "Treviso",
         "ospite" => "Olimpia Milano",
         "casaPunti" => 65,
         "ospitePunti" => 63
      ],
      [
         "casa" => "Trieste",
         "ospite" => "Cremona",
         "casaPunti" => 51,
         "ospitePunti" => 51
      ]
   ]


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         for ($i = 0; $i < count($matches); $i++) {
            // Olimpia Stella Azzurrao - Cantù | 55 - 60
            $match = $matches[$i];
            echo $match["casa"] . " - " . $match["ospite"] . " | " . $match["casaPunti"] . " - " . $match["ospitePunti"] . "<br>";
            
         }
      ?>
</body>
</html>