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
  $select = "SELECT * FROM user";
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
    <link rel="stylesheet" href="dashboard2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><ion-icon name="logo-playstation"></ion-icon></span>
                        <span class="title">Kritik Guru</span>
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
                    <a href="../Website Utama/index.php">
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
                        <a href="Inputan.php" class="btn"><i class='bx bx-plus'></i> Add</a>
                    </div>
                    <!-- <form action="" id="student-form" autocomplete="off">
                        <div class="form-grup">
                        <label for="name">Name</label>
                        <input type="text" id="name" placeholder="Enter Your Name">
                        </div>
                        <div class="form-grup">
                        <label for="price">Price</label>
                        <input type="text" id="price" placeholder="Enter Your Name">
                        </div>
                        <div class="form-grup">
                        <label for="payment">Payment</label>
                        <input type="text" id="payment" placeholder="Enter Your Name">
                        </div>
                        <div class="form-grup">
                        <label for="status">Status</label>
                        <input type="text" id="status" placeholder="Enter Your Name">
                        </div>
                        <div class="form-grup">
                        <input type="submit" value="submit">
                        </div>

                    </form> -->
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Nis</td>
                                <td>Email</td>
                                <td>Jurusan</td>
                                <td>Nomor</td>
                                <td>Jenis Kelamin</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody id="student-list">
                            <!-- <tr>
                                <td>Vi</td>
                                <td>$1200</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr> -->
                            <?php while($row = mysqli_fetch_assoc($data)):?>
                            <tr>
                                <td><?= $row["nama"];?></td>
                                <td><?= $row["nis"];?></td>
                                <td><?= $row["email"];?></td>
                                <td><?= $row["jurusan"];?></td>
                                <td><?= $row["nomor"];?></td>
                                <td><?= $row["jk"];?></td>
                                <td class="last">
                           <a href="ubah.php?id_siswa=<?= $row["id_siswa"];?>" class="btnn">
                           <i class='bx bxs-edit' class="icon"></i>
                  </a> 
                          <a href="hapus.php?id_siswa=<?= $row["id_siswa"];?>" onclick= "return confirm('Apakah Anda Yakin Untuk Menghapus Data Ini?')" class="btnn">
                          <i class='bx bxs-trash'></i>
                  </a>
                </td>
                            </tr>
                            <?php endwhile; ?>
                            <!-- <tr>
                                <td>Angga</td>
                                <td>$340</td>
                                <td>Paid</td>
                                <td><span class="status inprogress">InProgress</span></td>
                            </tr>
                            <tr>
                                <td>Rahmat</td>
                                <td>$220</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Fiki</td>
                                <td>$120</td>
                                <td>Paid</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>

                <div class="recentCostumers">
                    <div class="cardHeader">
                        <h2>Recent Costumers</h2>
                </div>
                <table>
                <?php while($row = mysqli_fetch_assoc($data)):?>
                    <tr>
                        <td width="60px"><div class="imgBx"><img src="../assets/GTA5.jpg" alt="" ></div></td>
                        <td><h4><?= $row["nama"];?></h4></td>
                    </tr>
                    <?php endwhile; ?>

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