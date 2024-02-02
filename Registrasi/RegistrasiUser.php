<?php

//koneksi ke database 
// require : fungsi untuk memanggil file koneksi
$koneksi = mysqli_connect("localhost", "root", "", "kritik");
 if(isset($_POST["simpan"])){

  $nis = htmlspecialchars($_POST["nis"]);
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $nomor = htmlspecialchars($_POST["nomor"]);
  $jk = htmlspecialchars($_POST["jk"]);


  $simpan = mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama','$nis','$email','$nomor', '$jk' ,'$jurusan' )");

  if($simpan){
    echo"<script>
    alert('Data Berhasil Di Tambahkan');
    document.location.href='../Website Utama/index.php';
    </script>";
  }else{
    echo"<script>
    alert('Data Gagal Di Tambahkan');
    document.location.href='tambahansiswa.php';
    </script>";
  }
 }

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="RegistrasiUser1.css">
</head>
<body>
    <div class="container">
        <div class="title">
            Registrasi
        </div>
        <div class="user-details">
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-box">
                <span class="details">Nama Lengkap</span>
                <input type="text" placeholder="Masukkan Nama Anda" required id="nama" name="nama">
            </div>
            <div class="input-box">
                <span class="details">NIS</span>
                <input type="text" placeholder="Masukkan NIS" required id="nama1" name="nis">
            </div>
            <div class="input-box">
                <span class="details">Email</span>
                <input type="text" placeholder="Masukkan Email" required id="email" name="email">
            </div>
            <div class="input-box">
                <span class="details">Nomor Hp</span>
                <input type="text" placeholder="Masukkan Nomor Hp" required id="nomor" name="nomor">
            </div>
            <div class="input-box">
                <span class="details">Jenis Kelamin</span>
                <input type="text" placeholder="Masukkan Karakter L / P" required id="sandi" name="jk">
            </div>
            <div class="input-box">
                <span class="details">Jurusan</span>
                <input type="text" placeholder="Masukkan Ulang Kata Sandi" required id="sandi1" name="jurusan">
            </div>
        </div>
     <!-- <div class="gender-details">
        <input type="radio" name="gender" id="dot-1" name="jk">
        <input type="radio" name="gender" id="dot-2" name="jk">
        <input type="radio" name="gender" id="dot-3" name="jk">
        <span class="gender-title">Jenis Kelamin</span>
        <div class="category">
            <label for="dot-1">
                <span class="dot one" value="1"></span>
                <span class="gender">Laki-Laki</span>
            </label>
            <label for="dot-2">
                <span class="dot two" value="2"></span>
                <span class="gender">Perempuan</span>
            </label>
            <label for="dot-3">
                <span class="dot three" value="3"></span>
                <span class="gender">Privasi</span>
            </label>
        </div>
      </div> -->
      <div class="button">
        
        <input type="submit" value="Registrasi" id="login" name="simpan">
    
      </div>
    </form>

    </div>
    <!-- <script>
        document.getElementById("login").onclick = function(){
        var username = document.getElementById("nama").value;
        var usernama = document.getElementById("nama1").value;
        var password = document.getElementById("sandi").value;
        var passwor = document.getElementById("sandi1").value;
        var email = document.getElementById("email").value;
        var nomor = document.getElementById("nomor").value;

        if(username == "EnvikiCraft" && usernama =="EnvikiCraft" && password == "020906" && passwor == "020906" && email == "fikimrifkialfajri@gmail.com" && nomor == "089676851007"){
            Swal.fire(
                'Good Job',
                'Selamat Datang Tuan!',
                'Succes').then((result) =>{
                if(result.isConfirmed){
                    window.location.href = "index.html";
                }
            })
        }
    }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>