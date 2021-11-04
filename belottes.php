<?php
echo '<h1> Valeurs des cartes de la belotte </h1>';

$belottes = [
   'Atout' => [
      'Valet'  => 20,
      9        => 14,
      'As'     => 11,
      10       => 10,
      'Roi'    => 4,
      'Dame'   => 3,
      8        => 0,
      7        => 0
   ],
   'Hors atout' => [
      'As'     => 11,
      10       => 10,
      'Roi'    => 4,
      'Dame'   => 3,
      'Valet'  => 2,
      9        => 0,
      8        => 0,
      7        => 0]
];
foreach($belottes as $k => $belotte){
   if($k == 'Atout'){
      echo 'Atout :'."\r\n";
      foreach($belotte as $carte1 => $atout){
         echo $carte1.' : '.$atout."\r\n";
      }
   }
   else{
      echo "\r\n".'Hors atout :'."\r\n";
      foreach($belotte as $carte2 => $horsAtout){
         echo $carte2.' : '.$horsAtout."\r\n";
      }
   }
}
echo '<br><br><a href=index.php>Retour</a>';
