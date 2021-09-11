<?php 
  $i = 2;
  do {
      echo "$i ";
      $i*=2;
  } while ($i <= 128);
  echo "<hr>";

  $i = 3125;
  do {
      echo "$i ";
      $i /=5;
  } while ($i >= 5);
  echo "<hr>";

  
  $books= [
      18,45,29,61,47,34,
  ];
  foreach ($books as $buku) {
  $sisaBagi = $buku % 3;
  echo "$buku % 3 = $sisaBagi<br>";
  }

  $a = 4;
  for ($b =$a; $b>0; $b--){
      for ($c=$a; $c>=$b; $c--) {
          echo "*";
      }
      echo "<br>";
  }
  
  
  for ($b =0; $b<5; $b++){
      for ($c=5; $c> $b; $c--) {
          echo "-";
      }
      for ($i = 0; $i <= $b; $i++){
          echo "*";
      }
      echo "<br>";
  }
?>