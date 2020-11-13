<?php

// koneksi ke database
$conn = mysqli_connect("localhost","root","","arkademy");

// ambil data ID
$id = $_GET["id"];

// query data berdasarkan id
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $lows = [];
    while ($low = mysqli_fetch_assoc($result)){
        $lows[]=$low;
    }
    return $lows;
}
// $query = "SELECT * FROM product where id=$id "; 
$data = query("SELECT * FROM product WHERE id = $id")[0];
var_dump($data["nama_product"]);

// cek tombol] submit
if( isset($_POST["submit"]) )
{

    $nama_produk = $_POST["nama_produk"];
    $keterangan = $_POST["ket"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    // Insert data ke query
    $query = "UPDATE product SET
                nama_product = '$nama_produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
                WHERE id = '$id'
                ";
    mysqli_query($conn, $query);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change data penjualan</title>
</head>
<body>
    <h1>
        Ubah Data Penjualan
    </h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="namaproduk">Nama Produk :</label>
                <input type="text" name="nama_produk" id="nama_produk" value="<?= $data["nama_product"]; ?>">
            </li>
            <li>
                <label for="Ket">Keterangan :</label>
                <input type="text" name="ket" id="Keterangan" value="<?= $data["keterangan"]; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga"value="<?= $data["harga"]; ?>">
            </li>
            <li>
                <label for="jumlah">Jumlah  :</label>
                <input type="text" name="jumlah" id="jumlah"value="<?= $data["jumlah"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">ubah</button>
                <a href="index1.php">back</a>
            </li>
        </ul>
    </form>
    
</body>
</html>