<html>
 <head>
 <title>Membuat Form Validasi </title>
 </head>
 <body>
 <h1>Membuat Form Validasi Dengan PHP <br/> ---</h1>
 <?php
 if(isset($_GET['nama'])){
 if($_GET['nama'] == "kosong"){
 echo "<h4 style='color:red'>Nama Belum Di Masukkan
!</h4>";
 }
}
?> 