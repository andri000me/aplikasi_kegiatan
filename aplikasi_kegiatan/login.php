<?php
include "koneksi.php";
if (isset($_POST['login'])) {
    $sql = mysqli_query($con, "SELECT * FROM daftar_siswa WHERE nama = $_POST[username] AND nis = $_POST[password]");
    $cek = mysqli_fetch_array($sql);
    $count = mysqli_num_rows($sql);
    if ($cek == true ) {
        session_start();
        $_SESSION['nama'] = $cek['nama'];
        header('location:master/siswa.php');
    }else{
        echo "Gagal Login";
    }
}

?>
<html>
</style>
<head>
    <title>Daily Activity</title>
    <link rel="shortcut icon" href="image/1.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="font-family: sans-serif; background: #5dd39e;">
    <br>
    <form method="post">
        <table border=0 align="center" cellpadding=5 cellspacing=0>
            <tr>
                <td colspan=3><center><font size=5>Silahkan login: </font></center></td>
            </tr>
            <tr>
                <td>Username</td><td>:</td><td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td><td>:</td><td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan=2>&nbsp;</td>
                <td><input type="submit" name="login" class="button" value="Login" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
</body>
<style>
  .button{
  background-color: #bce784;
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  }

  body{
      font-size: 25px;
  }
</style>
</html>