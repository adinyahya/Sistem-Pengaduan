<?php
session_start();
 include "koneksi.php";
#ambil data
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("content-disposition: attachment;filename=laporan_excel_perorangan".date('dmY').".xls");
 
$sql = "SELECT * FROM tb_pengaduan WHERE id = '".$_GET['id']."'";
$result = mysqli_query($conn,$sql); 
$row = mysqli_fetch_array($result);
{
	echo "<html>";
		 echo "<head>";
		 echo "</head>";
		 echo "<body>";
         echo "<h1>PENGADUAN</h1>"; 
		 echo "<table align='center' border='1px'>";  
		  
         echo "<th  width='175' border='0px'></th>";
         echo "<th  width='175' border='0px'></th>";
		 
        
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
		 echo "<b><td align='center'>No. Register </td></b>";		   
		 echo "<td align='center'>".$row["idregister"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tanggal Pengaduan </td></b>"; 	   
		 echo "<td align='center'>".$row["tanggal_pengaduan"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>";
		 echo "<tr>"; 
		 echo "<b><td align='center'>Nama Pelapor </td></b>"; 	  
		 echo "<td align='center'>".$row["nama_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tempat Lahir Pelapor </td></b>"; 	  
		 echo "<td align='center'>".$row["tempat_lahir_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tanggal Lahir Pelapor </td></b>"; 	 
		 echo "<td align='center'>".$row["tanggal_lahir_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Jenis Kelamin Pelaku </td></b>"; 	 
		 echo "<td align='center'>".$row["jeniskelamin_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Alamat Pelapor </td></b>"; 	  
		 echo "<td align='center'>".$row["alamat_pelapor"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>No. Telp Pelapor </td></b>"; 	  
		 echo "<td align='center'>".$row["notelp_pelapor"]."</td>";
		 echo "</tr>";
		 echo "<tr>";
		 echo "<tr>"; 
		 echo "<b><td align='center'>Nama Korban </td></b>"; 	 
		 echo "<td align='center'>".$nama_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tempat Lahir Korban </td></b>"; 	 
		 echo "<td align='center'>".$tempat_lahir_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tanggal Lahir Korban </td></b>"; 	  
		 echo "<td align='center'>".$tanggal_lahir_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Usia Korban </td></b>"; 	 
		 echo "<td align='center'>".$usia_korban."</td>";
		 echo "</tr>";
		 echo "<tr>"; 
		 echo "<b><td align='center'>Jenis Kelamin Korban </td></b>"; 	   
		 echo "<td align='center'>".$jeniskelamin_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Alamat Korban </td></b>"; 	  
		 echo "<td align='center'>".$alamat_korban."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 	 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Nama Pelaku </td></b>"; 	 
		 echo "<td align='center'>".$nama_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tempat Lahir Pelaku </td></b>"; 	 
		 echo "<td align='center'>".$tempat_lahir_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tanggal Lahir Pelaku </td></b>"; 	 
		 echo "<td align='center'>".$tanggal_lahir_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Jenis Kelamin Pelaku </td></b>"; 	  
		 echo "<td align='center'>".$jeniskelamin_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Alamat Pelaku </td></b>"; 	   
		 echo "<td align='center'>".$alamat_pelaku."</td>";
		 echo "</tr>"; 
		 echo "<tr>";
	 	 echo "<tr>"; 
		 echo "<b><td align='center'>Tempat Kejadian </td></b>"; 	 
		 echo "<td align='center'>".$row["tempat_kejadian"]."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Kronologi </td></b>"; 	 
		 echo "<td align='center'>".$row["kronologi"]."</td>";
		 echo "</tr>";
		 echo "<tr>"; 
		 echo "<b><td align='center'>Jenis Kekerasan </td></b>"; 	 
		 echo "<td align='center'>".$gas."</td>";
		 echo "</tr>"; 
		 echo "<tr>"; 
		 echo "<b><td align='center'>Jenis Layanan </td></b>"; 	 
		 echo "<td align='center'>".$row["jenis_layanan"]."</td>";
		 echo "</tr>";
		 echo "<tr>"; 
		 echo "<b><td align='center'>Tindakan Selanjutnya </td></b>"; 	 
		 echo "<td align='center'>".$row["tindakan_selanjutnya"]."</td>";
		 echo "</tr>"; 
		
	
        

	 echo "</table>";
	 echo "</body>";
	 echo "</html>";
}
  mysqli_close($conn);
?>