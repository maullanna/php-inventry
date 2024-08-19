<?php
include 'function.php';
// proses_login
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    //$cekdatabase untuk nyambungin ke database
    $cekdatabase = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password'");
    //kemudian hitung apakah ada di database di tabel login dari si ursename dan password yang cocok
    $hitung = mysqli_num_rows($cekdatabase);
  
    
    if ($hitung > 0) {
      $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
    };
};

if(!isset($_SESSION['log'])) {

} else{
  header('location:index.php'); 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan&family=PT+Serif&family=Playfair+Display:wght@400;500&family=Young+Serif&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="img/sc-inventry.png" type="image/x-icon">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="container">
        <img src="img/img-home.png" alt="" class="img-home" />
        <div class="text">
            <h1>Tracking Your Items !</h1> 
          
            <h2>Keep Your Stock Under Control</h2>
        </div>
        <div class="boxlogin">
            <img src="img/user-img.png" alt="" class="img-user" />
            <div class="box-input">
                <h1>Who Are You ?</h1>

                <div class="input-wrap">
                    <div class="icon-login">
                        <img src="img/user.png" alt=""><br>
                        <img src="img/reset-password.png" alt="">
                    </div>
                    <form method="post">
                        <div>
                            <input type="text" id="inputUsername" placeholder="Enter Username" name="username" />
                        </div>
                        <div id="eyePassword">
                            <input type="password" id="inputPassword" placeholder="Enter Password" name="password" />
                        </div>
                        <button class="btn" name="login">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/scripts.js"></script>
</body>

</html>