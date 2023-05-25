<?php
function cariKata($teks, $kata) {
    $kataDitemukan = preg_match_all("/\b$kata\b/i", $teks, $matches);
    return $kataDitemukan > 0 ? implode(' - ', $matches[0]) : 'Kata tidak ditemukan.';
}

// Contoh penggunaan fungsi
$teksMasukan = "Berikut adalah kisah sang gajah. Sang gajah memiliki teman serigala bernama DoeSang. Gajah sering dibela oleh serigala ketika harimau mendekati gajah.";

$kata1 = "sang gajah";
$kata2 = "serigala";
$kata3 = "harimau";

$output1 = cariKata($teksMasukan, $kata1);
$output2 = cariKata($teksMasukan, $kata2);
$output3 = cariKata($teksMasukan, $kata3);

// Menampilkan hasil pencarian
echo "Input: $teksMasukan\n";
echo "Output: $output1 - $output1 - $output2 - $output2 - $output3\n";
