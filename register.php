<?php
        //menyertakan file program koneksi.php pada register
        require('koneksi.php');

        //inisialisasi session
        session_start();
        $error = '';
        $validate = '';

        //mengecek apakah form registrasi di submit atau tidak
        if( isset($_POST['submit']) ){

        // menghilangkan backshlases
        $username = stripslashes($_POST['username']);

        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
        $name     = stripslashes($_POST['name']);
        $name     = mysqli_real_escape_string($con, $name);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $repass   = stripslashes($_POST['repassword']);
        $repass   = mysqli_real_escape_string($con, $repass);

        //mengecek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($name)) && !empty(trim($username)) && !empty(trim($email)) && !empty(trim($password)) && !empty(trim($repass))){

            //mengecek apakah password yang diinputkan sama dengan re-password yang diinputkan kembali
            if($password == $repass){

                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                if( cek_nama($name,$con) == 0 ){

                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    
                    //insert data ke database
                    $query = "INSERT INTO users (username,name,email, password ) VALUES ('$username','$nama','$email','$pass')";
                    $result   = mysqli_query($con, $query);

                    //jika insert data berhasil maka akan diredirect ke halaman Menu.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                       
                        header('Location: login.php');
                    
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Username sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
            
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    } 
    //fungsi untuk mengecek username apakah sudah terdaftar atau belum
    function cek_nama($username,$con){
        $nama = mysqli_real_escape_string($con, $username);
        $query = "SELECT * FROM users WHERE username = '$nama'";
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- FA CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
        <!-- CSS -->
        <link rel="stylesheet" href="css/styles.css">
        <title>register</title>
</head>
<body>
<img src="images/Background.png">
    <div class="page">
        <div class="kolom">
            <div class="title"><span>Daftar Sekarang</span></div>
                <form action="register.php" method="POST">
                    <?php if($error != ''){ ?>
                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                    <?php } ?>
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama Kamu..">
                        </div>
                        <div class="row">
                            <i class='fas fa-envelope'></i>
                            <input type="email" class="form-control" id="InputEmail" name="email" aria-describeby="emailHelp" placeholder="Masukkan Email Kamu..">
                        </div>
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username Kamu..">
                        </div>
                        <div class="row">
                            <i class='fas fa-lock'></i>
                            <input type="password" class="form-control" id="InputPassword" name="password" placeholder=" Masukan Password Kamu..">
                                <?php if($validate != '') {?>
                                    <p class="text-danger"><?= $validate; ?></p>
                                <?php }?>
                        </div>
                        <div class="row">
                             <i class='fas fa-lock'></i>
                            <input type="password" class="form-control" id="InputRePassword" name="repassword" placeholder="Konfirmasi Passwordnya..">
                            <?php if($validate != '') {?>
                                <p class="text-danger"><?= $validate; ?></p>
                            <?php }?>
                        </div>
                        <br>
                        <br>
                        <div class="row button">
                        <input type="submit" name="submit" value="Daftar">
                        </div>
                        <div class="signup-link">Sudah Punya Akun? <a href="login.php">Ayok Login!</a></div>
                </form>
        </div>
    </div>
</body>
</html>