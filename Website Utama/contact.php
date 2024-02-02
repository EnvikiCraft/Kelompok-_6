<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
                <li class="login"><a href="../Registrasi/RegistrasiUser.php">Login <i class='bx bx-right-arrow-alt'></i></a></li>
            </ul>
            
        </nav>
    </header>
   

   <div class="spasi"></div>
    <section class="contact">
        <div class="content">
            <h2>Contact US</h2>
            <p>Kirim Pesan / Saran Mu ke Kami, Kami Akan Menjawab itu ,Terima Kasih !!!</p>

        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="text">
                    <h3>Address</h3>
                    <p>Sulawesi Barat, <br>Campalagian, <br> Pappang 1,<br>Alun-Alun Tomadio,<br>21353</p>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                    <h3>Email</h3>
                    <p>fikirifkialfajri@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                    <h3>Phone</h3>
                    <p>0896-7685-1007</p>
                    </div>
                </div>
            </div>
            <div class="contactForm">
                <form action="">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                            <input type="text" required="required">
                            <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required">
                        <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea required="required"></textarea>
                    <span>Type Your Message</span>
            </div>
            <div class="inputBox">
                <input type="submit" value="Kirim">
        </div>
                </form>
            </div>
        </div>
    </section>

    <footer>
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
    </footer>

    <!-- <button id="pageUpButton" onclick="scrollToTop()">&#9650</button>
    <script src="js/scroll.js"></script> -->
</body>
</html>