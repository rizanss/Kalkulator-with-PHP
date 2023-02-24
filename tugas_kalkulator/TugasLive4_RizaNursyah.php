<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Kalkulator</title>
</head>
<body>
    <form method="post">
        <label for="bilangan1">Bilangan 1:</label>
        <input type="number" id="bilangan1" name="bilangan1" required>
        
        <label for="bilangan2">Bilangan 2:</label>
        <input type="number" id="bilangan2" name="bilangan2" required>
        
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
        // Fungsi untuk melakukan penjumlahan
        function penjumlahan($bil1, $bil2) {
            $hasil = $bil1 + $bil2;
            return $hasil;
        }

        // Fungsi untuk melakukan pengurangan
        function pengurangan($bil1, $bil2) {
            $hasil = $bil1 - $bil2;
            return $hasil;
        }

        // Fungsi untuk melakukan perkalian
        function perkalian($bil1, $bil2) {
            $hasil = $bil1 * $bil2;
            return $hasil;
        }

        // Fungsi untuk melakukan pembagian
        function pembagian($bil1, $bil2) {
            $hasil = $bil1 / $bil2;
            return $hasil;
        }

        // Check apakah form telah disubmit
        if (isset($_POST["hitung"])) {
            // Mengambil nilai bilangan 1 dan bilangan 2 dari form
            $bil1 = $_POST["bilangan1"];
            $bil2 = $_POST["bilangan2"];

            // Memanggil fungsi-fungsi kalkulator
            $hasil_penjumlahan = penjumlahan($bil1, $bil2);
            $hasil_pengurangan = pengurangan($bil1, $bil2);
            $hasil_perkalian = perkalian($bil1, $bil2);
            $hasil_pembagian = pembagian($bil1, $bil2);

            // Menampilkan hasil kalkulator
            echo "<div class='output'>";
            echo "<span class='result'>Hasil Penjumlahan : </span><span class='label'>$hasil_penjumlahan</span>";
            echo "<span class='result'>Hasil Pengurangan : </span><span class='label'>$hasil_pengurangan</span>";
            echo "<span class='result'>Hasil Perkalian : </span><span class='label'>$hasil_perkalian</span>";
            echo "<span class='result'>Hasil Pembagian : </span><span class='label'>$hasil_pembagian</span>";
            echo "<button class='reset' onclick='location.reload()'>Reset</button>";
            echo "</div>";
        }
    ?>
</body>
</html>