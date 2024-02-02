<?php
$koneksi = mysqli_connect("localhost", "root", "", "kritik");
 if(isset($_POST["simpan"])){

  $kritik = htmlspecialchars($_POST["kritik"]);

//   $dir =  "gambar/";
//   $tmpFile = $_FILES["gambar"]["tmp_name"];
  
//   move_uploaded_file($tmpFile, $dir.$gambar);

  $simpan = mysqli_query($koneksi, "INSERT INTO kritik VALUES('', '$kritik')");

  if($simpan){
    echo"<script>
    alert('Kritik Berhasil Ditambahkan')
    document.location.href='index.php';
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
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <section>

        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span><span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span><span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span><span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span><span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>    <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="signin">
            <div class="content">
                <h2>Ketik Kritik Anda</h2>
            <div class="form">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="inputBox">
                    <input type="text" required name="kritik">
                    <i>Ketik Disini</i>
                </div>
                <!-- <div class="inputBox">
                    <input type="text" required>
                    <i>Password</i>
                </div> -->
                <!-- <div class="links">
                    <a href="#">Forgot Password</a>
                    <a href="#">Sign Up</a>
                </div> -->
                <div class="inputBox">
                  
                    <input type="submit" value="Kirim" name="simpan">
                    
                    
            </div>
            </form>
            </div>
            <a href="index.php">KEMBALI</a>
        </div>
    </section>
    <script>
        // var VariabelPHP = "<?php echo $simpan; ?>";

        // if(VariabelPHP){
        //     Swal.fire(
        //         'Good Job',
        //         'Selamat Datang Tuan!',
        //         'Succes').then((result) =>{
        //         if(result.isConfirmed){
        //             window.location.href = "index.php";
        //         }
        //     })
        // }else{
        //     alert("Nama / Kata Sandi Anda Salah");
        // }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>