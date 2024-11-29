<?php
//menyertakan file program koneksi.php pada register
require('koneksi.php');

//inisialisasi session
session_start();
$error = '';
$validate = '';

//mengecek apakah sesssion username tersedia atau tidak jika tersedia maka akan diredirect ke halaman Menu
if( isset($_SESSION['username']) ) header('Location: index.php');
//mengecek apakah form disubmit atau tidak
if( isset($_POST['submit']) ){
        
        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
         // menghilangkan backshlases
        $password = stripslashes($_POST['password']);
         //cara sederhana mengamankan dari sql injection
        $password = mysqli_real_escape_string($con, $password);
       
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($password))){
            //select data berdasarkan username dari database
            $query      = "SELECT * FROM users WHERE username = '$username'";
            $result     = mysqli_query($con, $query);
            $rows       = mysqli_num_rows($result);
            if ($rows != 0) {
                $hash   = mysqli_fetch_assoc($result)['password'];
                if(password_verify($password, $hash)){
                    $_SESSION['username'] = $username;
               
                    header('Location: index.php');
                }
                            
            //jika gagal maka akan menampilkan pesan error
            } else {
                $error =  'Register User Gagal !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google" content="notranslate">
        <!-- CSS-->
        <link rel="stylesheet" href="css/styles.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>
<body>
    <img src="images/Background.png">

<div class="page">
    <div class="kolom">
        <div class="title"><span>Login Yok</span></div>
            <form action="login.php" method="POST">
                <?php if($error != ''){ ?>
                <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                <?php } ?>
                   
                <div class="row">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
                </div>

                <div class="row">
                    <i class="fas fa-lock"></i>
                        <input type="password" class="form-control" id="InputPassword" name="password" placeholder="Password">
                    <?php if($validate != '') {?>
                        <p class="text-danger"><?= $validate; ?></p>
                    <?php }?>
                </div>
<br>
<br>
                <div class="row button">
                    <input type="submit" name="submit" value="Login">
                </div>
                <div class="signup-link">Belum Punya Akun? <a href="Register.php">Daftar sekarang!</a></div>
            </form>
    </div>
</div>
</body>
</html>