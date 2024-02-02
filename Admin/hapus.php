<?php
// panggil file koneksi
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kritik";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

//ambil data id_siswa yang dikirimkan di url menggunakan $_GET

$id_siswa = $_GET["id_siswa"];

//query hapus data
$hapus = mysqli_query($conn, ("DELETE FROM user WHERE id_siswa='$id_siswa'"));

if($hapus){
    echo"<script>
    alert('Data Berhasil Dihapus');
    document.location.href='dashboard.php';
    </script>";
}else{
    echo"<script>
    alert('Data Gagal Dihapus');
    document.location.href='dashboard.php';
    </script>";
}

?>