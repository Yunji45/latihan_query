<?php

function Numbers($N) {
    $count = 0;
    $number = 1;
  
    while ($count < $N) {
        if ($number % 3 == 0 && $number % 7 == 0) {
            echo "Z, ";
        } elseif ($number % 3 == 0 || $number % 7 == 0) {
            echo $number . ", ";
        }
        $number++;
        $count++;
    }
}

// Menerima input dari pengguna
$N = isset($_POST['N']) ? $_POST['N'] : 0;

// Memastikan nilai N positif
$N = abs(intval($N));

?>

<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Bilangan Cacah Kelipatan 3 atau 7</title>
</head>
<body>
    <h2>Menampilkan Bilangan Cacah Kelipatan 3 atau 7</h2>
    <form method="post" action="">
        <label for="N">Masukkan nilai :</label>
        <input type="number" id="N" name="N" min="1" value="<?php echo $N; ?>">
        <input type="submit" value="Tampilkan">
    </form>

    <?php
    // Menampilkan hasil
    if ($N > 0) {
        echo "<h3>Output:</h3>";
        Numbers($N);
    }
    ?>
</body>
</html>
