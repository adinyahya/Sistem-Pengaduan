<?php

  include "koneksi.php";


      $nama_pelapor="";
      $tempat_lahir_pelapor="";
      $tanggal_lahir_pelapor="";
      $jeniskelamin_pelapor="";
      $alamat_pelapor="";
      $notelp_pelapor="";

     
      $tempat_kejadian="";
      $tempat_kejadian2="";
      $kronologi="";

      $Gnama_pelapor="";
      $Gtempat_lahir_pelapor="";
      $Gtanggal_lahir_pelapor="";
      $Gjeniskelamin_pelapor="";
      $Galamat_pelapor="";
      $Gnotelp_pelapor="";

      $Gnama_pelaku="";
      $Gtempat_lahir_pelaku="";
      $Gtanggal_lahir_pelaku="";
      $Gjeniskelamin_pelaku="";
      $Galamat_pelaku="";

      $Gtempat_kejadian="";
      $Gtempat_kejadian2="";
      $Gkronologi="";
      
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
          if(empty($_POST["nama_pelapor"]))
          {
              $Gnama_pelapor = "* Nama pelapor harus di isi";
          }
          else
          {
		     if($_POST["nama_pelapor"]) {
                  $nama_pelapor=test_input($_POST["nama_pelapor"]);
		    }
          }

          if(empty($_POST["tempat_lahir_pelapor"]))
          {
              $Gtempat_lahir_pelapor = "* Tempat lahir harus di isi";
          }
          else
          {
              if($_POST["tempat_lahir_pelapor"]) {
                  $tempat_lahir_pelapor= test_input($_POST["tempat_lahir_pelapor"]);
              }
          }


          if(empty($_POST["tanggal_lahir_pelapor"]))
          {
                $Gtanggal_lahir_pelapor = "* Tanggal lahir pelapor harus di isi";      
          }
          else
          {
              if($_POST["tanggal_lahir_pelapor"]) {
                  $tanggal_lahir_pelapor= test_input($_POST["tanggal_lahir_pelapor"]);
              }
          }
           if(empty($_POST["jeniskelamin_pelapor"]))
          {
                    $Gjeniskelamin_pelapor = "* Jenis kelamin harus di pilih";
          }
          else
          {
              if($_POST["jeniskelamin_pelapor"]) {
                  $jeniskelamin_pelapor= test_input($_POST["jeniskelamin_pelapor"]);
              }
          }

          if(empty($_POST["alamat_pelapor"]))
          {
                $Galamat_pelapor = "* Alamat pelapor harus di isi";
          }
          else
          {
              if($_POST["alamat_pelapor"]) {
                  $alamat_pelapor= test_input($_POST["alamat_pelapor"]);
              }
          }
 
          if(empty($_POST["notelp_pelapor"])) 
          {
                $Gnotelp_pelapor = "* No telp harus di isi";
    
          } 
          else if(!is_numeric($_POST['notelp_pelapor'])) 
          {
                 $Gnotelp_pelapor = "* No telp harus angka";
          } 
          else 
          {
               if($_POST["notelp_pelapor"]) 
               {
                  $notelp_pelapor=test_input($_POST["notelp_pelapor"]);
               }
             
          }

$nama_korban = $_POST['nama_korban']; // Ambil data nis dan masukkan ke variabel nis
$tempat_lahir_korban = $_POST['tempat_lahir_korban']; // Ambil data nama dan masukkan ke variabel nama
$tanggal_lahir_korban = $_POST['tanggal_lahir_korban'];

$jeniskelamin_korban = $_POST['jeniskelamin_korban'];
$alamat_korban = $_POST['alamat_korban']; // Ambil data alamat dan masukkan ke variabel alamat

           if(empty($_POST["nama_pelaku"]))
          {
              $Gnama_pelaku = "* Nama pelaku harus di isi";
          }
          else
          {
		     
$nama_pelaku = $_POST['nama_pelaku']; // Ambil data nis dan masukkan ke variabel nis
          }

          if(empty($_POST["tempat_lahir_pelaku"]))
          {
                $Gtempat_lahir_pelaku = "* Tempat Lahir harus di isi";   
          }
          else
          {
              
$tempat_lahir_pelaku = $_POST['tempat_lahir_pelaku']; // Ambil data nama dan masukkan ke variabel nama
          }


          if(empty($_POST["tanggal_lahir_pelaku"]))
          {
                $Gtanggal_lahir_pelaku = "* Tanggal lahir harus di isi";
          }
          else
          {
              
$tanggal_lahir_pelaku = $_POST['tanggal_lahir_pelaku'];
          }

             if(empty($_POST["jeniskelamin_pelaku"]))
          {
              $Gjeniskelamin_pelaku = "* Jenis kelamin haris di pilih";
          }
          else
          {
              
$jeniskelamin_pelaku = $_POST['jeniskelamin_pelaku'];
          }
          if(empty($_POST["alamat_pelaku"]))
          {
                $Galamat_pelaku = "* Alamat pelaku harus di isi";
          }
          else
          {
            
$alamat_pelaku = $_POST['alamat_pelaku'];
          }

           if(empty($_POST["tempat_kejadian"]))
          {
      
          }
          else
          {
              if($_POST["tempat_kejadian"]) {
                  $tempat_kejadian= test_input($_POST["tempat_kejadian"]);
              }

          }
            if(empty($_POST["tempat_kejadian2"]))
          {
            
          }
          else
          {
              if($_POST["tempat_kejadian2"]) {
                  $tempat_kejadian= test_input($_POST["tempat_kejadian2"]);
              }

          }


          if(empty($_POST["kronologi"]))
          {
                $Gkronologi = "* Kronologi harus di isi";
          }
          else
          {
              if($_POST["kronologi"]) {
                  $kronologi= test_input($_POST["kronologi"]);
              }
          }

   
       
                      $tanggal_pengaduan = date('y-m-d');
                    
                
          if(!empty($_POST["nama_pelapor"]) && is_numeric($_POST['notelp_pelapor']) && !empty($_POST["tempat_lahir_pelapor"]) && !empty($_POST["tanggal_lahir_pelapor"])  && !empty($_POST["alamat_pelapor"]) && !empty($_POST["notelp_pelapor"]) && !empty($_POST["nama_pelaku"])  && !empty($_POST["tempat_lahir_pelaku"]) && !empty($_POST["tanggal_lahir_pelaku"]) && !empty($_POST["alamat_pelaku"])  && !empty($_POST["kronologi"]) )
          {

            if($_POST["oke"]) {
                $test= test_input($_POST["oke"]);
                if($test=="Tidak"){
                    $sql = "INSERT INTO tb_pengaduan SET nama_pelapor='$nama_pelapor', tempat_lahir_pelapor='$tempat_lahir_pelapor', tanggal_lahir_pelapor='$tanggal_lahir_pelapor', jeniskelamin_pelapor='$jeniskelamin_pelapor', alamat_pelapor='$alamat_pelapor', notelp_pelapor='$notelp_pelapor',  tempat_kejadian='$tempat_kejadian', kronologi='$kronologi', tanggal_pengaduan='$tanggal_pengaduan' ";
          
           
		      if ($conn->query($sql)==TRUE){
 
				$getQuery = "SELECT * FROM `tb_pengaduan`";
				
				$getQuery = $conn->query($getQuery);
				if(count($getQuery) > 0) {
					foreach($getQuery as $value) {
						$newId = $value['id'];
					}
					$getNomerInventaris = 'IDREG'.$newId;
					$result = "UPDATE tb_pengaduan SET idregister='$getNomerInventaris' where id='$newId'";
					
					$r = mysqli_query($conn, $result);

			  }
          
        $tanggal_korban = date('y-m-d');         
        $sqlKorban = $pdo->prepare("INSERT INTO korban(id,tanggal_korban,nama_korban,tempat_lahir_korban,tanggal_lahir_korban,jeniskelamin_korban,alamat_korban) VALUES('$newId','$tanggal_korban',:nama_korban,:tempat_lahir_korban,:tanggal_lahir_korban,:jeniskelamin_korban,:alamat_korban)");

$index = 0; 
foreach($nama_korban as $dataKorban){ 
	$sqlKorban->bindParam(':nama_korban', $dataKorban);
	$sqlKorban->bindParam(':tempat_lahir_korban', $tempat_lahir_korban[$index]); 
	$sqlKorban->bindParam(':tanggal_lahir_korban', $tanggal_lahir_korban[$index]);
	$sqlKorban->bindParam(':jeniskelamin_korban', $jeniskelamin_korban[$index]);
	$sqlKorban->bindParam(':alamat_korban', $alamat_korban[$index]);
	$sqlKorban->execute(); 
	
	$index++; 
}
  $getW = "SELECT * FROM `korban`";
				
				$getW = $conn->query($getW);
				if(count($getW) > 0) {$ind=0;
					foreach($getW as $valueW) {
                        $newIdKorban[$ind] = $valueW['id_korban'];
						$newUser[$ind] = $valueW['tanggal_lahir_korban'];
                        $newUser1[$ind] = $valueW['tanggal_korban'];
					$ind++;}$i=0;
			foreach($getW as $valueW){
                    $birht[$i] = ($newUser[$i]);
                    $biday[$i] = new DateTime($birht[$i]);
                    $today[$i] = new DateTime($newUser1[$i]);

                    $hitung[$i] = $today[$i]->diff($biday[$i]);
                    $simpanlahir[$i] = "tanggal lahir :". date('d M Y', strtotime($birht[$i])).'<br>';
                    $b[$i] = $hitung[$i]->y;
                    $cetakusia = $b[$i];
					$resultW = "UPDATE korban set usia_korban='$cetakusia' where id_korban='$newIdKorban[$i]'";
				    $rW = mysqli_query($conn, $resultW);
                        $i++;
            }
			  }
 
 
  $sqlP = $pdo->prepare("INSERT INTO pelaku(id,nama_pelaku,tempat_lahir_pelaku,tanggal_lahir_pelaku,jeniskelamin_pelaku,alamat_pelaku) VALUES('$newId',:nama_pelaku,:tempat_lahir_pelaku,:tanggal_lahir_pelaku,:jeniskelamin_pelaku,:alamat_pelaku)");

$indexP = 0; // Set index array awal dengan 0
foreach($nama_pelaku as $datapelaku){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$sqlP->bindParam(':nama_pelaku', $datapelaku); // Set data nis
	$sqlP->bindParam(':tempat_lahir_pelaku', $tempat_lahir_pelaku[$indexP]); // Ambil dan set data nama sesuai index array dari $index
	$sqlP->bindParam(':tanggal_lahir_pelaku', $tanggal_lahir_pelaku[$indexP]);
	$sqlP->bindParam(':jeniskelamin_pelaku', $jeniskelamin_pelaku[$indexP]);
	$sqlP->bindParam(':alamat_pelaku', $alamat_pelaku[$indexP]); // Ambil dan set data telepon sesuai index array dari $index
	$sqlP->execute(); // Eksekusi query insert
	
	$indexP++; // Tambah 1 setiap kali looping
}
		//	 window.location='cetaklaporanuser.php';
   
	echo "<script> alert('Berhasil'); window.location='cetaklaporanuser.php'; </script>";

			  }else{
                  echo "<script> alert('Gagal'); </script>";
				  //echo"error:".$sql."<br>".$conn->error;
			  }
                    }
                else{
                    $sql = "INSERT INTO tb_pengaduan SET nama_pelapor='$nama_pelapor', tempat_lahir_pelapor='$tempat_lahir_pelapor', tanggal_lahir_pelapor='$tanggal_lahir_pelapor', jeniskelamin_pelapor='$jeniskelamin_pelapor', alamat_pelapor='$alamat_pelapor', notelp_pelapor='$notelp_pelapor',  tempat_kejadian='$tempat_kejadian', kronologi='$kronologi', tanggal_pengaduan='$tanggal_pengaduan' ";
            
           
				
if ($conn->query($sql)==TRUE){
                
	$getQuery = "SELECT * FROM `tb_pengaduan`";
				
				$getQuery = $conn->query($getQuery);
				if(count($getQuery) > 0) {
					foreach($getQuery as $value) {
						$newId = $value['id'];
					}
					$getNomerInventaris = 'IDREG'.$newId;
					$result = "UPDATE tb_pengaduan SET idregister='$getNomerInventaris' where id='$newId'";
					
					$r = mysqli_query($conn, $result);
                    $tanggal_korban = date('y-m-d'); 
                    $korbanH = "INSERT into korban set id='$newId', nama_korban='$nama_pelapor', tanggal_korban='$tanggal_korban', tempat_lahir_korban='$tempat_lahir_pelapor', tanggal_lahir_korban='$tanggal_lahir_pelapor', jeniskelamin_korban='$jeniskelamin_pelapor', alamat_korban='$alamat_pelapor'";
                    $rH = mysqli_query($conn, $korbanH);
            }
 $getW = "SELECT * FROM `korban`";
				
				$getW = $conn->query($getW);
				if(count($getW) > 0) {
					foreach($getW as $valueW) {
                        $newIdKorban = $valueW['id_korban'];
						$newUser = $valueW['tanggal_lahir_korban'];
                        $newUser1 = $valueW['tanggal_korban'];
					}
			
                    $birht = ($newUser);
                    $biday = new DateTime($birht);
                    $today = new DateTime($newUser1);

                    $hitung = $today->diff($biday);
                    $simpanlahir = "tanggal lahir :". date('d M Y', strtotime($birht)).'<br>';
                    $b = $hitung->y;
                    $cetakusia = $b;
					$resultW = "UPDATE korban set usia_korban='$cetakusia' where id_korban='$newIdKorban'";
				    $rW = mysqli_query($conn, $resultW);
                      
            
			  }


  $sqlP = $pdo->prepare("INSERT INTO pelaku(id,nama_pelaku,tempat_lahir_pelaku,tanggal_lahir_pelaku,jeniskelamin_pelaku,alamat_pelaku) VALUES('$newId',:nama_pelaku,:tempat_lahir_pelaku,:tanggal_lahir_pelaku,:jeniskelamin_pelaku,:alamat_pelaku)");

$indexP = 0; // Set index array awal dengan 0
foreach($nama_pelaku as $datapelaku){ // Kita buat perulangan berdasarkan nis sampai data terakhir
	$sqlP->bindParam(':nama_pelaku', $datapelaku); // Set data nis
	$sqlP->bindParam(':tempat_lahir_pelaku', $tempat_lahir_pelaku[$indexP]); // Ambil dan set data nama sesuai index array dari $index
	$sqlP->bindParam(':tanggal_lahir_pelaku', $tanggal_lahir_pelaku[$indexP]);
	$sqlP->bindParam(':jeniskelamin_pelaku', $jeniskelamin_pelaku[$indexP]);
	$sqlP->bindParam(':alamat_pelaku', $alamat_pelaku[$indexP]); // Ambil dan set data telepon sesuai index array dari $index
	$sqlP->execute(); // Eksekusi query insert
	
	$indexP++; // Tambah 1 setiap kali looping
}
     echo "<script> alert('Berhasil'); window.location='cetaklaporanuser.php';</script>";

			  }else{
                  echo "<script> alert('Gagal'); </script>";
				  //echo"error:".$sql."<br>".$conn->error;
			  }
                   }
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
