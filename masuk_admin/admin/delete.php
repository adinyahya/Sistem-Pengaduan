<?php
include "koneksi.php"; 
     
      $id="";
	  
	  

      if(empty($_GET["id"]))
      {

      }
      else
      {
          if($_GET["id"]) {
              $id= test_input($_GET["id"]);
			  
          }
      }
      
      if(!empty($_GET["id"]))
      {
         
		$sql = "DELETE FROM kekerasan WHERE id='$id'" ;
        $exe = mysqli_query($conn,$sql);
        $sql10 = "DELETE FROM korban WHERE id='$id'" ;
        $exe10 = mysqli_query($conn,$sql10);
        $sql11 = "DELETE FROM pelaku WHERE id='$id'" ;
        $exe11 = mysqli_query($conn,$sql11);
		$sql12 = "DELETE FROM tb_pengaduan WHERE id='$id'" ;
        $exe12 =mysqli_query($conn,$sql12);
       //$sql= "DELETE a*, b* FROM kekerasan a, tb_pengaduan b WHERE a.id = 1 AND b.id = 1";
        //$sql = "DELETE a.*, b.* FROM tb_pengaduan a JOIN kekerasan b on a.id = b.id WHERE a.id = '$id'";
		if (mysqli_query($conn, $sql) && mysqli_query($conn,$sql10) && mysqli_query($conn,$sql11) && mysqli_query($conn,$sql12)) {
		  
				echo "<script> alert('Berhasil'); window.location='laporan.php';</script>";
	
		
          } else {
             
				echo "<script> alert('Gagal'); window.location='laporan.php';</script>";
              echo "Error: " . $sql . "</br>" . mysqli_error($conn);
             
          }
       mysqli_close($conn);
      }


      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  ?>
