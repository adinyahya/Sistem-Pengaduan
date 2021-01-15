<?php

  include "koneksi.php";

      $nama_pelapor="";
      $tempat_lahir_pelapor="";
      $tanggal_lahir_pelapor="";
      $jeniskelamin_pelapor="";
      $alamat_pelapor="";
      $notelp_pelapor="";

      $nama_korban="";
      $tempat_lahir_korban="";
      $tanggal_lahir_korban="";
      $jeniskelamin_korban="";
      $alamat_korban="";

      $nama_pelaku="";
      $tempat_lahir_pelaku="";
      $tanggal_lahir_pelaku="";
      $jeniskelamin_pelaku="";
      $alamat_pelaku="";

      $tempat_kejadian="";
      $kronologi="";
      $jenis_kekerasan="";
      $jenis_layanan="";
      $tindakan_selanjutnya="";

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
         
           if(empty($_POST["tempat_kejadian"]))
          {
            
          }
          else
          {
              if($_POST["tempat_kejadian"]) {
                  $tempat_kejadian= test_input($_POST["tempat_kejadian"]);
              }

          }

          if(empty($_POST["kronologi"]))
          {

          }
          else
          {
              if($_POST["kronologi"]) {
                  $kronologi= test_input($_POST["kronologi"]);
              }
          }

            

        
          if(empty($_POST["jenis_layanan"]))
          {

          }
          else
          {
              if($_POST["jenis_layanan"]) {
                  $jenis_layanan= test_input($_POST["jenis_layanan"]);
              
              }
          }if(empty($_POST["jenis_layanan2"]))
          {

          }
          else
          {
              if($_POST["jenis_layanan2"]) {
                  $jenis_layanan= test_input($_POST["jenis_layanan2"]);
              
              }
          }

         
            if(empty($_POST["tindakan_selanjutnya"]))
          {

          }
          else
          {
              if($_POST["tindakan_selanjutnya"]) {
                  $tindakan_selanjutnya= test_input($_POST["tindakan_selanjutnya"]);
              }
          }
       
         
           $tanggal_pengaduan = date('Y-m-d');
          if(!empty($_POST["kronologi"]) && !empty($_POST["tindakan_selanjutnya"]) )
          {
              $as = $_GET['id'];
              $sql = "UPDATE tb_pengaduan SET tempat_kejadian='$tempat_kejadian', kronologi='$kronologi', jenis_layanan='$jenis_layanan', tindakan_selanjutnya='$tindakan_selanjutnya', tanggal_pengaduan='$tanggal_pengaduan' WHERE id='$as' ";

                
              if ($conn->query($sql)==TRUE){
                    
                       $sql = "DELETE from kekerasan where id='$as'";
                            $conn->query($sql);
                            

                  if(!empty($_POST["jenis_kekerasan1"]))
                    {
                        if($_POST["jenis_kekerasan1"]) {
                     
                         $jenis_kekerasan= test_input($_POST["jenis_kekerasan1"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                            
                        }
                    }
                    if(!empty($_POST["jenis_kekerasan2"]))
                    {
                        if($_POST["jenis_kekerasan2"]) {
                            
                            $jenis_kekerasan= test_input($_POST["jenis_kekerasan2"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                        }
                    }
                    if(!empty($_POST["jenis_kekerasan3"]))
                    {
                        if($_POST["jenis_kekerasan3"]) {
                            $jenis_kekerasan= test_input($_POST["jenis_kekerasan3"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                        }
                    }
                    if(!empty($_POST["jenis_kekerasan4"]))
                    {
                        if($_POST["jenis_kekerasan4"]) {
                            $jenis_kekerasan= test_input($_POST["jenis_kekerasan4"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                        }
                    }
                    if(!empty($_POST["jenis_kekerasan5"]))
                    {
                        if($_POST["jenis_kekerasan5"]) {
                            $jenis_kekerasan= test_input($_POST["jenis_kekerasan5"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                        }
                    }
                    if(!empty($_POST["jenis_kekerasan6"]))
                    {
                        if($_POST["jenis_kekerasan6"]) {
                            $jenis_kekerasan= test_input($_POST["jenis_kekerasan6"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                        }
                    }
              
                    if(!empty($_POST["jenis_kekerasan8"]))
                    {
                        if($_POST["jenis_kekerasan8"]) {
                            $jenis_kekerasan= test_input($_POST["jenis_kekerasan8"]);
                            $sql = "INSERT INTO kekerasan SET id='$as', nama_kekerasan='$jenis_kekerasan'";
                            $conn->query($sql);
                        }
                    }
                    
				echo "<script> alert('Berhasil'); window.location='laporan.php';</script>";
			  }else{
                  echo "<script> alert('Gagal'); </script>";
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
