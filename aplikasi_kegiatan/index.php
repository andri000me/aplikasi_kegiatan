<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Kegiatan Peserta Didik</title>
    </head>

    <body style="font-family: sans-serif; background: #5dd39e;">
        <?php
        if (isset($_POST['pd'])) {
            echo "<script>document.location.href='master/daftarsiswa.php'</script>";
        }
        elseif (isset($_POST['gurupj'])) {
            echo "<script>document.location.href='guru/index.php'</script>";
        }
        elseif (isset($_POST['pemb'])) {
            echo "<script>document.location.href='guru/index.php'</script>";
        }
        elseif (isset($_POST['ortu'])) {
            echo "<script>document.location.href='ortu/index.php'</script>";
        }
        ?>

        <form method="post">
            <table align="center">
                <br>
                <br>
                <tr><td colspan="2" align="center" style="font-size: 25px"><center><a href='login.php'>Login</a> atau Daftar Sebagai :</center></td></tr>
                <br>
                <br>
                <tr><td><input class="button" type="submit" name="pd" value="Siswa"></td></tr>   
                <tr><td><input class="button1" type="submit" name="ortu" value="Orang Tua"></td></tr>
                <tr><td><input class="button2" type="submit" name="pemb" value="Guru Pembimbing"></td></tr>
                <tr><td><input class="button3" type="submit" name="gurupj" value="Guru PJ"></td></tr>
            </table>
        </form>
    </body>
    <style type="text/css">
.button{
  background-color: #bce784;
  border: none;
  color: black;
  padding: 20px 60px;
  width: 100%;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
.button1{
  background-color: #bce784;
  border: none;
  color: black;
  width: 100%;
  padding: 20px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
.button2{
  background-color: #bce784;
  border: none;
  color: black;
  width: 100%;
  padding: 20px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
.button3{
  background-color: #bce784;
  border: none;
  color: black;
  width: 100%;
  padding: 20px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
a{
  background-color: #348aa7;
  border: none;
  color: black;
  padding: auto;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
}
    </style>
</html>

