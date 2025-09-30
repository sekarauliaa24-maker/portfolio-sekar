<?php
// 1. Function cekLogin($username, $password)
function cekLogin($username, $password) {
    // Data pengguna tetap (hardcoded)
    $userValid = "admin";
    $passValid = "123456";

    // Cek kecocokan username dan password
    return ($username === $userValid && $password === $passValid);
}

// 2. Function tampilkanPesan($hasil)
function tampilkanPesan($hasil) {
    if ($hasil) {
        echo "✅ Login berhasil. Selamat datang!";
    } else {
        echo "❌ Login gagal. Username atau password salah.";
    }
}

// 3. Pemanggilan fungsi dan pengujian
$usernameInput = "admin";       // Ganti dengan input user (misalnya dari form)
$passwordInput = "123456";      // Ganti dengan input user

$hasilLogin = cekLogin($usernameInput, $passwordInput);
tampilkanPesan($hasilLogin);
?>
