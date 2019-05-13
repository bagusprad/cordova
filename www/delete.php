<?php
 include "db.php";
 if(isset($_GET['id_minuman']))
 {
 $id_minuman=$_GET['id_minuman'];
 $q=mysqli_query($con,"delete from `minuman` where `id_minuman`='$id_minuman'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
