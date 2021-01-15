<?php
session_start();
 include "koneksi.php";
#ambil data
header("Content-Type: application/force-download");
 header("Cache-Control: no-cache, must-revalidate");
 header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("Content-Type:application/doc");
header("Content-Disposition:attachment;filename=laporan_docx_perorangan.doc");

$sql = "SELECT * FROM tb_pengaduan WHERE id = '".$_GET['id']."'";
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_array($result);
{
	echo "<html>";
		 echo "<head>";
		 echo "</head>";
		 echo "<body>";
         echo "<h1>PENGADUAN</h1>"; 
		 echo "<table border='1px'>";    
         echo "<tr>";
         echo "<th width='250'></th>"; 
         echo "<th width='10'></th>";    
         echo "<th width='50'></th>";       
         echo "</tr>"; 
		 		 $idku = $row['id'];
								 $sql1 ="SELECT * FROM kekerasan WHERE id='$idku'";
								$result1 = mysqli_query($conn, $sql1)  or die ("Query salah : ".mysqli_error($conn));
								$gas="";
								while($tampil1 = mysqli_fetch_array($result1)) {
									$gas=$gas.$tampil1['nama_kekerasan'].", ";
								}
								 $Sql2 ="SELECT * FROM korban WHERE id='$idku'";
								$say2 = mysqli_query($conn, $Sql2)  or die ("Query salah : ".mysqli_error($conn));
								$nama_korban="";
								$tempat_lahir_korban="";
								$tanggal_lahir_korban="";
								$usia_korban="";
								$jeniskelamin_korban="";
								$alamat_korban="";
								while($tampil2 = mysqli_fetch_array($say2)) {
									$nama_korban=$nama_korban.$tampil2['nama_korban'].", ";
									$tempat_lahir_korban=$tempat_lahir_korban.$tampil2['tempat_lahir_korban'].", ";	
									$tanggal_lahir_korban=$tanggal_lahir_korban.$tampil2['tanggal_lahir_korban'].", ";
									
									$usia_korban=$usia_korban.$tampil2['usia_korban'].", ";	
									$jeniskelamin_korban=$jeniskelamin_korban.$tampil2['jeniskelamin_korban'].", ";
									$alamat_korban=$alamat_korban.$tampil2['alamat_korban'].", ";	
								}
								 $Sql3 ="SELECT * FROM pelaku WHERE id='$idku'";
								$say3 = mysqli_query($conn, $Sql3)  or die ("Query salah : ".mysqli_error($conn));
								$nama_pelaku="";
								$tempat_lahir_pelaku="";
								$tanggal_lahir_pelaku="";
								$jeniskelamin_pelaku="";
								$alamat_pelaku="";
								while($tampil3 = mysqli_fetch_array($say3)) {
									$nama_pelaku=$nama_pelaku.$tampil3['nama_pelaku'].", ";
									$tempat_lahir_pelaku=$tempat_lahir_pelaku.$tampil3['tempat_lahir_pelaku'].", ";	
									$tanggal_lahir_pelaku=$tanggal_lahir_pelaku.$tampil3['tanggal_lahir_pelaku'].", ";
									$jeniskelamin_pelaku=$jeniskelamin_pelaku.$tampil3['jeniskelamin_pelaku'].", ";
									$alamat_pelaku=$alamat_pelaku.$tampil3['alamat_pelaku'].", ";	
								}

		 
		 echo "<tr>"; 
		 echo "<b><td>No. Register </td></b>";
		 echo "<td> : </td>";   
		 echo "<td>".$row["idregister"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tanggal Pengaduan </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["tanggal_pengaduan"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>";
		 echo "<tr>"; 
		 echo "<b><td>Nama Pelapor </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["nama_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tempat Lahir Pelapor </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["tempat_lahir_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tanggal Lahir Pelapor </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["tanggal_lahir_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Jenis Kelamin Pelaku </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["jeniskelamin_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Alamat Pelapor </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["alamat_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>No. Telp Pelapor </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["notelp_pelapor"]."</td>";
		 echo "</tr>";

		 echo "<tr>";
		 echo "<tr>"; 
		 echo "<b><td>Nama Korban </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$nama_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tempat Lahir Korban </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$tempat_lahir_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tanggal Lahir Korban </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$tanggal_lahir_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Usia Korban </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$usia_korban."</td>";
		 echo "</tr>";
		 echo "<tr>"; 
		 echo "<b><td>Jenis Kelamin Korban </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$jeniskelamin_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Alamat Korban </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$alamat_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 
		 echo "<tr>"; 
		 echo "<b><td>Nama Pelaku </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$nama_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tempat Lahir Pelaku </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$tempat_lahir_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tanggal Lahir Pelaku </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$tanggal_lahir_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Jenis Kelamin Pelaku </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$jeniskelamin_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Alamat Pelaku </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$alamat_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>";
		 
	 	 echo "<tr>"; 
		 echo "<b><td>Tempat Kejadian </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["tempat_kejadian"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Kronologi </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["kronologi"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Jenis Kekerasan </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$gas."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Jenis Layanan </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["jenis_layanan"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td>Tindakan Selanjutnya </td></b>"; 
		 echo "<td> : </td>";  
		 echo "<td>".$row["tindakan_selanjutnya"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>";
        

	 echo "</table>";
	 echo "</body>";
	 echo "</html>";
}
  mysqli_close($conn);
?>