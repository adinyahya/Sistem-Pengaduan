<?php

  include "iud_pengaduan/koneksi.php";
  
      $editpass="";
      $editverpass="";
	  $md5Ex="";
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
		  if($_POST["editpass"]) {
                  $editpass=test_input($_POST["editpass"]);
		  }
		  
		  
		  
		  if($_POST["editverpass"] != $_POST["editpass"])
          {
              $md5Ex="* Password Tidak Sama !";
              
          }else 
          {
              if($_POST["editverpass"] == $_POST["editpass"]) {
                      $editverpass= md5($_POST["editverpass"]);
          }
          }
          if(!empty($_POST["editpass"])  && !empty($_POST["editverpass"]) && ($_POST["editpass"] == $_POST["editverpass"]))
          {
              $as = $_GET['id'];
              $sql = "UPDATE users SET password='$editpass', verpass='$editverpass' where id='$as' ";

                
              if ($conn->query($sql)==TRUE){
				echo "<script> alert('Berhasil'); window.location='setting.php';</script>";
			  }else{
				  echo"error:".$sql."<br>".$conn->error;
			  }
           mysqli_close($conn);
          }
        }

      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  ?>
