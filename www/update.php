<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id_minuman=$_POST['id_minuman'];
 $nama_minuman=$_POST['nama_minuman'];
 $harga=$_POST['harga'];
 
 $id_penjual=$_POST['id_penjual'];
 $q=mysqli_query($con,"UPDATE `minuman` SET `nama_minuman`='$nama_minuman',`harga`='$harga',`id_penjual`='$id_penjual' where `id_minuman`='$id_minuman'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
