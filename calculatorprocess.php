<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $digit1 = (float) $_POST['digit1'];
    $digit2 = (float) $_POST['digit2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case "+":
            $hasil = $digit1 + $digit2;
            break;
        case "-":
            $hasil = $digit1 - $digit2;
            break;
        case "*":
            $hasil = $digit1 * $digit2;
            break;
        case "/":
            $hasil = ($digit2 != 0) ? $digit1 / $digit2 : "Error: Pembagian dengan nol!";
            break;
        default:
            $hasil = "Operator tidak valid!";
    }

    // Kirim hasil ke halaman hasil.php
    header("Location: index.php?hasil=" . urlencode($hasil) . "&digit1=$digit1&digit2=$digit2&operator=" . urlencode($operator));
    exit();
} else {
    echo "Akses tidak valid!";
}

