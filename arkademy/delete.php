<?php
$id = $_GET["id"];
$conn = mysqli_connect("localhost","root","","arkademy");
mysqli_query($conn, "DELETE FROM product WHERE id = $id");
return mysqli_affected_rows($conn);



if (($id) > 0){
    echo "
    <script>
        alert('data berhasil dihapus!')
        document.location.href ='index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus!')
        document.location.href ='index.php';
    </script>
    ";
}
?> 
