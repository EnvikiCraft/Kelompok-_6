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
    document.location.href='../admin/dashboard.php';
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
    <link rel="stylesheet" href="inputan.css">
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-playstation"></ion-icon></span>
                        <span class="title">Game News</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title">Costumers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="chatbubble-ellipses-outline"></ion-icon></span>
                        <span class="title">Message</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>
                        <span class="title">Help</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title">Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <span class="title">Password</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <div class="search">
                    <label for="">
                        <input type="text" placeholder="Search Here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="../assets/MortalKombat11.jpg" alt="" width="60px">
                </div>
            </div>
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">267</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,8774</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- .detail list -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <form action="" method="POST" id="student-form" autocomplete="off">
                        <div class="form-grup">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter Your Name" name="nama">
                        </div>
                        <div class="form-grup">
                        <label for="price">Nis</label>
                        <input type="text" id="price" placeholder="Enter Your Name" name="nis">
                        </div>
                        <div class="form-grup">
                        <label for="payment">Email</label>
                        <input type="text" id="payment" placeholder="Enter Your Name" name="email">
                        </div>
                        <div class="form-grup">
                        <label for="status">Jurusan</label>
                        <input type="text" id="status" placeholder="Enter Your Name" name="jurusan">
                        </div>
                        <div class="form-grup">
                        <label for="status">Nomor</label>
                        <input type="text" id="status" placeholder="Masukkan nomor anda" name="nomor">
                        </div>
                        <div class="form-grup">
                        <label for="status">Jenis Kelamin</label>
                        <input type="text" id="status" placeholder="Ketik L / P" name="jk">
                        </div>
                        <div class="form-grup">
                        <input type="submit" value="submit" name="simpan">
                        </div>

                    </form>
                   
                </div>

                <div class="recentCostumers">
                    <div class="cardHeader">
                        <h2>Recent Costumers</h2>
                </div>
                <table>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="../assets/GTA5.jpg" alt="" ></div></td>
                        <td><h4>Trevor Philips</h4></td>
                    </tr>
        
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="../assets/Minecraft.jpg" alt="" ></div></td>
                        <td><h4>Steve<br><span>Adam</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="../assets/GTA5.jpg" alt="" ></div></td>
                        <td><h4>Trevor<br><span>Philips</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="../assets/MortalKombat11.jpg" alt="" ></div></td>
                        <td><h4>Hanzo<br><span>Hasashi</span></h4></td>
                    </tr>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="../assets/GTA5.jpg" alt="" ></div></td>
                        <td><h4>Maichel<br><span>De Santa</span></h4></td>
                    </tr>
                </table>
            </div>

        </div>
    </div> 

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="dashboard.js"></script>
    <script>

        //MenuTogle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function(){
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }

        //add hovered
        let list = document.querySelectorAll('.navigation li');
        function activeLink(){
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>
</body>
</html>