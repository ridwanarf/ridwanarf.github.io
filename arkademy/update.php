<?php

// koneksi ke database
$conn = mysqli_connect("localhost","root","","arkademy");

// cek tombol] submit
if( isset($_POST["submit"]) ){

    $nama_produk = $_POST["nama_produk"];
    $keterangan = $_POST["ket"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    // Insert data ke query
    $query = "INSERT INTO product 
        Values 
        ('','$nama_produk','$keterangan','$harga','$jumlah')";
    mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update data penjualan</title>
</head>
<body>
    <h1>
        Tambah Data Penjualan
    </h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="namaproduk">Nama Produk :</label>
                <input type="text" name="nama_produk" id="nama_produk">
            </li>
            <li>
                <label for="Ket">Keterangan :</label>
                <input type="text" name="ket" id="Keterangan">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga">
            </li>
            <li>
                <label for="jumlah">Jumlah  :</label>
                <input type="text" name="jumlah" id="jumlah">
            </li>
            <li>
                <button type="submit" name="submit">tambah data</button>
                <a href="index1.php">back</a>
            </li>
        </ul>
    </form>
    
</body>
</html>