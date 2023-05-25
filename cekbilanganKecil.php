<?php
function findSmallestNonNegative($inputArray) {
    $inputArray = array_unique($inputArray); // Menghapus elemen duplikat
  
    sort($inputArray); // Mengurutkan elemen dalam array
  
    $n = count($inputArray);
    $smallest = 1; // Inisialisasi bilangan cacah terkecil
  
    for ($i = 0; $i < $n; $i++) {
      if ($inputArray[$i] <= $smallest) {
        $smallest = $inputArray[$i] + 1; // Perbarui bilangan cacah terkecil
      } else {
        return $smallest; // Jika ditemukan elemen yang lebih besar dari bilangan cacah terkecil, langsung kembalikan bilangan cacah terkecil
      }
    }
  
    return $smallest;
  }
  
  // Contoh penggunaan
  $input1 = [5, 2, 8, 4, 3, 10];
  $input2 = [2, 3, 4, 6];
  $input3 = [8, 6, 7, 12];
  
  $output1 = findSmallestNonNegative($input1);
  $output2 = findSmallestNonNegative($input2);
  $output3 = findSmallestNonNegative($input3);
  
  echo "Output 1: $output1\n";
  echo "Output 2: $output2\n";
  echo "Output 3: $output3\n";
  