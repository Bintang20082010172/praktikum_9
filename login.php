<?php
    session_start();
    include "koneksi.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <title>Halaman Login</title>
</head>
<body>
    <section class="box-formulir">
        <h2><center>Halaman login</center></h2>
            <form method="post" class ="box">
                <label>Username &emsp;:</label>
                <input type="text" name="fusername"><br>

                <label>Password &emsp;&nbsp;:</label>
                <input type="password" name="fpassword"><br>
                
                <center><button type="submit" name="fmasuk" class="input-control">Login</button></center>
            </form>
    </section>
    <?php
        if (isset($_POST['fmasuk'])) {
           $username = $_POST['fusername'];
           $password = $_POST['fpassword'];
           $qry = mysqli_query($conn,"SELECT * FROM akun_login WHERE username = '$username' AND password = md5('$password')");
           $cek = mysqli_num_rows($qry);
            if ($cek==1) {
                $_SESSION['userweb']=$username;
                header ("location:cetak.php");
                exit;
            }
            else {
                echo "Username atau password salah";
            }
        }
    ?>
</body>
</html>