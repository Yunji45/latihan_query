<?php
function printPattern($N) {
    if ($N % 2 === 0) {
      echo "Input harus bilangan ganjil.";
      return;
    }
  
    $pattern = array();
  
    // Mengisi pola dengan X
    for ($i = 0; $i < $N; $i++) {
      for ($j = 0; $j < $N; $j++) {
        $pattern[$i][$j] = 'X';
      }
    }
  
    // Mengubah beberapa X menjadi O sesuai pola yang diinginkan
    for ($i = 1; $i < $N - 1; $i++) {
      for ($j = 1; $j < $N - 1; $j++) {
        if ($i == $j || $i + $j == $N - 1) {
          $pattern[$i][$j] = 'O';
        }
      }
    }
  
    // Menampilkan pola
    for ($i = 0; $i < $N; $i++) {
      for ($j = 0; $j < $N; $j++) {
        echo $pattern[$i][$j];
      }
      echo "\n";
    }
  }
  
  // Contoh penggunaan
  $N1 = 5;
  $N2 = 3;
  $N3 = 7;
  $N4 = 2;
  
  echo "Output 1:\n";
  printPattern($N1);

  
  echo "\nOutput 2:\n";
  printPattern($N2);
  
  echo "\nOutput 3:\n";
  printPattern($N3);
  
  echo "\nOutput 4:\n";
  printPattern($N4);
  