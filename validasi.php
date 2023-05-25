<?php
function cekKataSandi($kataSandi) {
    $errorMessages = [];

    // Cek panjang kata sandi
    if (strlen($kataSandi) < 8 || strlen($kataSandi) > 32) {
        $errorMessages[] = "Kata sandi harus memiliki panjang minimal 8 karakter dan maksimal 32 karakter.";
    }

    // Cek apakah karakter awal adalah angka
    if (preg_match('/^\d/', $kataSandi)) {
        $errorMessages[] = "Karakter awal tidak boleh angka.";
    }

    // Cek apakah terdapat angka dalam kata sandi
    if (!preg_match('/\d/', $kataSandi)) {
        $errorMessages[] = "Kata sandi harus memiliki angka.";
    }

    // Cek apakah terdapat huruf kapital dan huruf kecil dalam kata sandi
    if (!preg_match('/[a-z]/', $kataSandi) || !preg_match('/[A-Z]/', $kataSandi)) {
        $errorMessages[] = "Kata sandi harus memiliki huruf kapital dan huruf kecil.";
    }

    // Mengembalikan pesan kesalahan jika ada, atau kata sandi valid jika tidak ada kesalahan
    if (!empty($errorMessages)) {
        return implode(" ", $errorMessages);
    } else {
        return "Kata sandi valid";
    }
}

// Contoh penggunaan fungsi
$input1 = "5andiwara";
$input2 = "sandiwar4";
$input3 = "Sandiwar4";

$output1 = cekKataSandi($input1);
$output2 = cekKataSandi($input2);
$output3 = cekKataSandi($input3);

// Menampilkan hasil pengecekan
echo "Input: $input1\n";
echo "Output: $output1\n\n";

echo "Input: $input2\n";
echo "Output: $output2\n\n";

echo "Input: $input3\n";
echo "Output: $output3\n";
