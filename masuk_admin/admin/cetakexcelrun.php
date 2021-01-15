<?php
 include "koneksi.php";
#ambil data
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("content-disposition: attachment;filename=laporan_full_pengaduan".date('dmY').".xls");
 
$Sql = "SELECT * FROM tb_pengaduan";                         
	$result = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
	$nomor = 0;
{
 echo "<table border='1px' align='center'>";    
          echo "<tr>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NO.</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NO. REG</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TANGGAL PENGADUAN</th>";     
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NAMA PELAPOR</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TEMPAT LAHIR PELAPOR</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TANGGAL LAHIR PELAPOR</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>JENIS KELAMIN PELAPOR</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>ALAMAT PELAPOR</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NO. TELP PELAPOR</th>";

          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NAMA KORBAN</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TEMPAT LAHIR KORBAN</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TANGGAL LAHIR KORBAN</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>JENIS KELAMIN KORBAN</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>USIA KORBAN</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>ALAMAT KORBAN</th>"; 

          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NAMA PELAKU</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TEMPAT LAHIR PELAKU</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TANGGAL LAHIR PELAKU</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>JENIS KELAMIN PELAKU</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>ALAMAT PELAKU</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>KRONOLOGI</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>JENIS LAYANAN</th>"; 
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>JENIS KEKERASAN</th>";
          
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TINDAKAN SELANJUTNYA</th>";
          echo "</tr>"; 

          while($row = mysqli_fetch_array($result)) {
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
									$nama_korban=$nama_korban.$tampil2['nama_korban']."<br> ";
									$tempat_lahir_korban=$tempat_lahir_korban.$tampil2['tempat_lahir_korban']."<br> ";	
									$tanggal_lahir_korban=$tanggal_lahir_korban.$tampil2['tanggal_lahir_korban']."<br> ";
									$usia_korban=$usia_korban.$tampil2['usia_korban']."<br> ";	
									$jeniskelamin_korban=$jeniskelamin_korban.$tampil2['jeniskelamin_korban']."<br> ";
									$alamat_korban=$alamat_korban.$tampil2['alamat_korban']."<br> ";	
								}
								 $Sql3 ="SELECT * FROM pelaku WHERE id='$idku'";
								$say3 = mysqli_query($conn, $Sql3)  or die ("Query salah : ".mysqli_error($conn));
								$nama_pelaku="";
								$tempat_lahir_pelaku="";
								$tanggal_lahir_pelaku="";
								$jeniskelamin_pelaku="";
								$alamat_pelaku="";
                
								$notelp_pelaku="";
								while($tampil3 = mysqli_fetch_array($say3)) {
									$nama_pelaku=$nama_pelaku.$tampil3['nama_pelaku']."<br> ";
									$tempat_lahir_pelaku=$tempat_lahir_pelaku.$tampil3['tempat_lahir_pelaku']."<br> ";	
									$tanggal_lahir_pelaku=$tanggal_lahir_pelaku.$tampil3['tanggal_lahir_pelaku']."<br> ";
									$jeniskelamin_pelaku=$jeniskelamin_pelaku.$tampil3['jeniskelamin_pelaku']."<br> ";
									$alamat_pelaku=$alamat_pelaku.$tampil3['alamat_pelaku']."<br> ";	
                  
								}

	$nomor++;
  echo "<tr>";    
  
		     echo "<td align='center' bgcolor='#FFFFFF'>".$nomor."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["idregister"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["tanggal_pengaduan"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["nama_pelapor"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["tanggal_lahir_pelapor"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["tempat_lahir_pelapor"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["jeniskelamin_pelapor"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["alamat_pelapor"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["notelp_pelapor"]."</td>";
        
         echo "<td align='center' bgcolor='#FFFFFF'>".$nama_korban."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$tempat_lahir_korban."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$tanggal_lahir_korban."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$jeniskelamin_korban."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$usia_korban."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$alamat_korban."</td>";

		     echo "<td align='center' bgcolor='#FFFFFF'>".$nama_pelaku."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$tempat_lahir_pelaku."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$tanggal_lahir_pelaku."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$jeniskelamin_pelaku."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$alamat_pelaku."</td>";
		     //echo "<td align='center' bgcolor='#FFFFFF'>".$notelp_pelaku."</td>";
      
         echo "<td align='center' bgcolor='#FFFFFF'>".$row["kronologi"]."</td>"; 
         echo "<td align='center' bgcolor='#FFFFFF'>".$row["jenis_layanan"]."</td>";        
         echo "<td align='center' bgcolor='#FFFFFF'>".$gas."</td>"; 
         
         echo "<td align='center' bgcolor='#FFFFFF'>".$row["tindakan_selanjutnya"]."</td>"; 
         echo "</tr>";   
        
}
 echo "</table>"; 
}
  mysqli_close($conn);
?>