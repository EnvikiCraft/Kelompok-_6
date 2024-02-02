<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kritik";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
  
  //  if($conn){
  //   echo "KONEKSI BERHASIL";
  //  }else{
  //   echo "Gagal Koneksi";
  //  }

  //Ambil Data / query didatabase
  $select = "SELECT * FROM kritik";
  $data = mysqli_query($conn, $select);


  // while ($tampil = mysqli_fetch_assoc($data)){
  // var_dump($tampil);
  // } 
  
  // $tampil = mysqli_fetch_assoc($data);
  

// var_dump($data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  
</head>
<body>
    <header>
        <img src="../assets/SMK Negeri Labuang.png" alt="" class="logo">

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar">MENU</label>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <!-- <li><a href="#">Genre <b>&#9662;</b></a>
                <ul>
                    <li><a href="adventure.html">Adventure</a></li>
                    <li><a href="#">Fighting</a></li>
                    <li><a href="#">Action</a></li>
                </ul>
                </li> -->
                <li><a href="contact.php">Contact</a></li>
                <li class="login"><a href="../Admin/Login.php">Admin <i class='bx bx-right-arrow-alt'></i></a></li>
                <li class="login"><a href="../Registrasi/LoginUser.php">Login <i class='bx bx-right-arrow-alt'></i></a></li>
            </ul>
            
        </nav>
    </header>
    <section></section>
    <div class="wrapper">
        <div class="judul">
            <h1>Critiquing <span>Teachers</span></h1>
            <p>Persepsi Terhadap Cara Guru Mengajar</p>
        </div>
        <i id="left" class="fa-solid fa-angle-left" class="vi"></i>
        
        <ul class="carousel">
        <?php while($row = mysqli_fetch_assoc($data)):?>
            <li class="card">
                <div class="img"><img src="../assets/Person.jpg" alt="" draggable="false"></div>
                <h2>" <span>ortal Kombat</span> "</h2>
                <span>" <?= $row["kritik"];?> "</span>
            </li>
            <!-- <li class="card">
                <div class="img"><img src="../assets/GTA5.jpg" alt="" draggable="false" ></div>
                <h2>GTA V</h2>
                <span>Game Open World</span>
            </li>
            <li class="card">
                <div class="img"><img src="../assets/Minecraft.jpg" alt="" draggable="false"></div>
                <h2>Minecraft</h2>
                <span>Game Adventure</span>
            </li>
            <li class="card">
                <div class="img"><img src="../assets/TheLastOfUs.jpg" alt="" draggable="false"></div>
                <h2>The Last Of US</h2>
                <span>Game Adventure</span>
            </li>
            <li class="card">
                <div class="img"><img src="../assets/MortalKombat11.jpg" alt="" draggable="false"></div>
                <h2>Mortal Kombat</h2>
                <span>Game Fighting</span>
            </li>
            <li class="card">
                <div class="img"><img src="../assets/MortalKombat11.jpg" alt="" draggable="false"></div>
                <h2>Mortal Kombat</h2>
                <span>Game Fighting</span>
            </li> -->
            <?php endwhile; ?>
        </ul>
       
        <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
    <script src="script.js"></script>
    <div class="bg">
    <a href="Kritik.php"><button type="button" class="btn"><i class='bx bx-plus'></i>Kritik</button></a>
    </div>
        </div>

    <!-- <footer>
        <div class="footerContainer">
            <div class="socialIcons">
                <a href=""><img src="../assets/fb.png" alt="" width="10px"></a>
                <a href=""><img src="../assets/ig.png" alt="" width="20px"></a>
                <a href=""><img src="../assets/yt.png" alt="" width="20px"></a>
            </div>
            <div class="footerNav">
                <ul type="none">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Article</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            
        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Design by <span class="designer">Enviki</span></span></p>
        </div>
    </footer> -->
</body>
</html>