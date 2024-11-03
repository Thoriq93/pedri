<?php
// Pengaturan session
session_start();

// Informasi pengguna (biasanya dari database)
$nama_pengguna_benar = "user123";
$kata_sandi_benar = "password123";

// Periksa apakah formulir sudah disubmit
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pengguna = $_POST["nama_pengguna"];
    $kata_sandi = $_POST["kata_sandi"];

    // Periksa apakah nama pengguna dan kata sandi benar
    if($nama_pengguna === $nama_pengguna_benar && $kata_sandi === $kata_sandi_benar) {
        // Autentikasi berhasil, arahkan ke halaman selamat datang
        $_SESSION["nama_pengguna"] = $nama_pengguna;
        header("location: welcome.php");
    } else {
        // Autentikasi gagal, tampilkan pesan kesalahan
        $pesan_error = "Nama pengguna atau kata sandi salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama_pengguna">Nama Pengguna:</label><br>
        <input type="text" id="nama_pengguna" name="nama_pengguna" required><br>
        <label for="kata_sandi">Kata Sandi:</label><br>
        <input type="password" id="kata_sandi" name="kata_sandi" required><br><br>
        <input type="submit" value="Login">
    </form>
    <?php
    // Tampilkan pesan kesalahan (jika ada)
    if(isset($pesan_error)) {
        echo "<p>$pesan_error</p>";
    }
    ?>
</body>
</html>