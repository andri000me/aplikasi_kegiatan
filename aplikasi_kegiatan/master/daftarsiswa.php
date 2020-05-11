<?php
session_start();
include '../koneksi.php';

  
     if(isset($_POST['submit'])){ 
         $sql = mysqli_query($con, "INSERT INTO daftar_siswa VALUES('','$_POST[nama]','$_POST[nis]','$_POST[rombel]','$_POST[rayon]','$_POST[no_hp]','$_POST[email]')"); 
         if ($sql) { 
            echo "<script>alert('Data berhasil disimpan');document.location.href='login.php';</script>"; 
         }else{ 
            echo mysql_error($con); 
         } 
     } 

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h2>Form Pendaftaran Siswa</h2>
    <form method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
        </div>
	<div class="form-group">
            <label>NIS:</label>
            <input type="text" name="nis" class="form-control" placeholder="Masukan NIS" />
        </div>
	<div class="form-group">
	     <label>Rombel:</label>
	     <input type="text" name="rombel" class="form-control" placeholder="Masukan Rombel" />
	</div> 
    <div class="form-group">
         <label>Rayon:</label>
         <input type="text" name="rayon" class="form-control" placeholder="Masukan Rayon" />
    </div> 
	<div class="form-group">
            <label>No HP:</label>
            <input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" />
        </div>
    <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
        </div>

        <button type="submit" name="submit" class="button">Submit</button>

    </form>
</div>
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
body{
    font-family: sans-serif;
    background: #5dd39e;
}
    </style>
</html>