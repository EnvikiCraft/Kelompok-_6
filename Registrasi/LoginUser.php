<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="LoginUser1.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        
            <h1><span class="text">L</span>ogin <span class="text">U</span>ser</h1>
            <div class="input-box">
                <input type="text" placeholder="Nama" required id="nama">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Kata Sandi" required id="sandi">
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Ingat Saya</label>
                
            </div>

            <button type="submit" class="btn" id="login">Login</button>
            <div class="register-link">
                <p>Tidak Punya Akun?<a href="RegistrasiUser.php">Registrasi</a></p>
            </div>

           
    </div>
    <script>
        document.getElementById("login").onclick = function(){
        var username = document.getElementById("nama").value;
        var password = document.getElementById("sandi").value;

        if(username == "EnvikiCraft" && password == "020906"){
            Swal.fire(
                'Good Job',
                'Selamat Datang Tuan!',
                'Succes').then((result) =>{
                if(result.isConfirmed){
                    window.location.href = "../Website Utama/index.php";
                }
            })
        }else{
            alert("Nama / Kata Sandi Anda Salah");
        }
    }</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>