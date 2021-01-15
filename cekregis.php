<?php
include "koneksi.php";
      $emailEx="";
      $nama="";
      $email="";
      $editpass="";
      $editverpass="";
	    $md5Ex="";
      $gagalnama="";
      $gagalemail="";
      $gagalpassword="";
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {

        if(empty($_POST["nama"]))
          {
              $gagalnama = "* Nama tidak boleh kosong"; 
          }
          else
          {
      if($_POST["nama"]) 
      {
                  $nama=test_input($_POST["nama"]);
		  }
          }

          if(empty($_POST["email"]))
          {
              $gagalemail = "* Email tidak boleh kosong"; 
          }
          else
          {
		  if($_POST["email"]) {
                  $email=test_input($_POST["email"]);
		  }
          }
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		  {
                   	  $emailEx = "* Masukkan email dengan benar"; 
                       
          }
if(empty($_POST["editpass"]))
          {
              $gagalpassword="* Password tidak boleh kosong";
          }
          else
          {
		  if($_POST["editpass"]) {
                  $editpass=test_input($_POST["editpass"]);
		  }
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
          if(!empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST["nama"]) && !empty($_POST["editpass"])  && !empty($_POST["editverpass"]) && ($_POST["editpass"] == $_POST["editverpass"]))
          {
              //$as = $_GET['id'];
              $sql = "INSERT into users set last_name='$nama',email='$email', password='$editpass', verpass='$editverpass', hak_akses='2' ";

                
              if ($conn->query($sql)==TRUE){
				echo "<script> alert('Berhasil'); window.location='index.php';</script>";
			  }else{
			      echo "<script> alert('Email anda sudah terdaftar'); window.location='index.php';</script>";
				 // echo"error:".$sql."<br>".$conn->error;
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
