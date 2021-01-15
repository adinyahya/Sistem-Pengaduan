<?php

session_start();
error_reporting(0);
error_reporting(E_ALL);
if (isset($_SESSION['hak_akses']))
{
    if($_SESSION['hak_akses'] == "1")
    {
           header ("location:../../masuk_admin/admin/laporan.php"); 
    }
    else if($_SESSION['hak_akses'] == "2")
    {

        
    }
}else if(!isset($_SESSION['hak_akses']))
{
header ("location:../../index.php");
}


include "iud_pengaduan/insertuserpengaduan.php"; 
include "iud_pengaduan/koneksi.php"; 
 
?>

<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Pengaduan Online</title>

	<!-- CSS -->
	<link rel="icon" type="image/png" href="../../img/favicon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>pengaduan2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="js/jquery.min.js" type="text/javascript"></script>



	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	
</head>
 <style>
.hid 
{
  display: none;

}
    </style>
    <script type="text/javascript">
    function showHide(){
        var select = document.getElementById("sal");
        var hideninp= document.getElementsByClassName("hid");
        
        for(var i=0;i != hideninp.length;i++)
            {
                if(select.value =="dll"){
                    hideninp[i].style.display = "inline";
                }else
                    {
                        hideninp[i].style.display = "none";
                    }
                    
            }
    }
    </script>

<script type="text/javascript">
    function showRadio(){
        if(document.getElementById('pil').checked){
          document.getElementById('form-controlx').style.display = 'none';
          //document.getElementById('form').style.display = 'block';
        }else{
          document.getElementById('form-controlx').style.display = 'block';
          //document.getElementById('form').style.display = 'none';
        }
    }
    </script>

  <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> 
                        <?php				
			
echo $_SESSION['last_name'];

?> 
                        
                        </a>
                        </li>
                        <li><a href="setting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                             <li><a href="pengaduan_user.php"><i class="fa fa-send fa-fw"></i> Pengaduan Online</a>
                        </li>
                        <li class="divider"></li>
                        
                         <?php
                         if(empty($_SESSION['oauth_provider'])){
                          echo "<li><a href='logout.php'><i class='fa fa-sign-out fa-fw'></i> Logout</a>";
                         }else 
                         { 
                             echo "<li><a href='../../logoutgmail.php'><i class='fa fa-sign-out fa-fw'></i> Logout</a>";
                         }
                         ?>
                        
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->

    <div id="container">

<style>
.war{
        color : red;
}
.biru{
        color : blue;
}
.hijau{
        color : green;
}
</style>
          <form method="post" action="" class="form" enctype="multipart/form-data">
 
    <b><label class="hijau"> FORM PENGADUAN ONLINE</label><br></b><br>
   
    <label class="biru"> IDENTITAS PELAPOR </label>
    
    <br>
    <label for="name"> Nama : </label> <?php echo "<label class='war'> $Gnama_pelapor</label >"; ?>
          <input name="nama_pelapor" type="text" >
    <label for="name"> Tempat Lahir : </label> <?php echo "<label class='war'>$Gtempat_lahir_pelapor</label>"; ?>
          <input name="tempat_lahir_pelapor" type="text" >
    <label for="name"> Tanggal Lahir : (0000-00-00) </label> <?php echo "<label class='war'>$Gtanggal_lahir_pelapor</label>"; ?>
    <input type="date" class="tanggal" name="tanggal_lahir_pelapor" id="tanggalp" data-date-format="y-m-d">
     
    <label for="name"> Jenis Kelamin</label>
       <select name="jeniskelamin_pelapor">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
  <br> <label for="name"> Alamat</label> <?php echo "<label class='war'>$Galamat_pelapor</label>"; ?>
   <br>   
      <textarea name="alamat_pelapor" type="text" ></textarea>
   <label for="name"> No.tlpn/Hp</label> <?php echo "<label class='war'>$Gnotelp_pelapor</label>"; ?>
      <input name="notelp_pelapor" type="text" >
  <br><br>

  
  <label class="biru"> IDENTITAS KORBAN</label>
  <label for="name"> Identitas korban sama dengan Pelapor ? </label><br>&nbsp;&nbsp;
      <input align="right" type="radio"  name="oke" id="pil" value="Ya" onclick="showRadio()"/>Ya
      <input align="right" type="radio"  name="oke" id="pil1" value="Tidak" onclick="showRadio()" checked/>Tidak 
      
      <div  id="form-controlx" style="display:block">
      <br>
      	&nbsp;&nbsp;&nbsp;&nbsp;<b>Korban ke 1 :</b><br>
      <label for="name"> Nama </label><br>
          <input  name="nama_korban[]" type="text" > 
      <label for="name"> Tempat Lahir </label>
            <input name="tempat_lahir_korban[]" type="text">
      <label for="name"> Tanggal Lahir : (0000-00-00) </label>
          
         <input type="date" class="tanggal" name="tanggal_lahir_korban[]" id="tanggalp" data-date-format="y-m-d" >
     
      <label for="name"> Jenis Kelamin : </label>
           <select name="jeniskelamin_korban[]">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
      <br><label for="name"> Alamat</label>      
          <textarea name="alamat_korban[]" type="text"></textarea>
<br><br>
            <div id="insert-form"></div>
      	&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="war" id="btn-tambah-form">Tambah korban</button>
	  <button type="button" class="war" id="btn-reset-form">Reset korban</button><br><br>
      </div>
     
    <br><br>
    <label class="biru"> IDENTITAS PELAKU</label><br>
     <br>
      	&nbsp;&nbsp;&nbsp;&nbsp;<b>Pelaku ke 1 :</b><br>
    <label for="name"> Nama :</labeL> <?php echo "<label class='war'>$Gnama_pelaku</label>"; ?>
      <input name="nama_pelaku[]" type="text" id="nama">
    <label for="name"> Tempat Lahir : </label> <?php echo "<label class='war'>$Gtempat_lahir_pelaku</label>"; ?>
        <input name="tempat_lahir_pelaku[]" type="text">
    <label for="name">Tanggal Lahir : (0000-00-00) </label> <?php echo "<label class='war'>$Gtanggal_lahir_pelaku</label>"; ?>
    <input type="date" class="tanggal" name="tanggal_lahir_pelaku[]" id="tanggalp" data-date-format="yyyy-mm-dd">
     
    <label for="name"> Jenis Kelamin </label>
      <select name="jeniskelamin_pelaku[]">
                    <option value="Laki-laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
     <br>
   <label for="name"> Alamat</label> <?php echo "<label class='war'>$Galamat_pelaku</label>"; ?>
      <textarea name="alamat_pelaku[]" type="text"></textarea>
      <br>
      <div id="insertP-form"></div>
      	&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="war" id="btn-tambahP-form">Tambah pelaku</button>
	  <button type="button" class="war" id="btn-resetP-form">Reset pelaku</button><br><br>
	  
      <label for="name"> tempat kejadian</label>    
      <select id="sal" name="tempat_kejadian"  onclick="showHide()">
                    <option value="Rumah Tangga">Rumah Tangga</option>
                    <option value="Sekolah">Sekolah</option>
                    <option value="Tempat Kerja">Tempat Kerja</option>
                    <option value="Tempat Umum">Tempat Umum</option>
                    
                    <option value="dll">Dll</option>
                  </select><br>
                  <input name="tempat_kejadian2" class="hid" type="text" id="nama">
                  
    <label for="name"> Kronologi </label> <?php echo "<label class='war'>$Gkronologi</label>"; ?>
      <textarea name="kronologi" type="text"></textarea>
     	
      <input type="submit" value="KIRIM">  
</form>

<input type="hidden" id="jumlah-form" value="1">
<input type="hidden" id="jumlahP-form" value="1">
<script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambah-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya
            var kurang = jumlah - 1;
            $("#insert-form").append("	&nbsp;&nbsp;&nbsp;&nbsp;<b>Korban ke " + nextform + " :</b><br>" +
           "<label for='name'> Nama </label><br>" +
           "<input  name='nama_korban[]' type='text' >" + 
           "<label for='name'> Tempat Lahir </label>" +
           "<input name='tempat_lahir_korban[]' type='text'>" +
           "<label for='name'> Tanggal Lahir : (0000-00-00) </label>" +
           "<input type='date' class='tanggal' name='tanggal_lahir_korban[]' id='tanggalp' data-date-format='y-m-d' >" +
           "<label for='name'> Jenis Kelamin : </label>" +
           "<select name='jeniskelamin_korban[]'>" + 
           "<option value='Laki-laki'>Laki-Laki</option>" + 
           "<option value='Perempuan'>Perempuan</option>" +
           "</select>" +
           "<br><label for='name'> Alamat</label> " +     
           "<textarea name='alamat_korban[]' type='text'></textarea>" );
           $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
				});
		
		// Buat fungsi untuk mereset form ke semula
		$("#btn-reset-form").click(function(){
			$("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
	</script>
<script>
	$(document).ready(function(){ // Ketika halaman sudah diload dan siap
		$("#btn-tambahP-form").click(function(){ // Ketika tombol Tambah Data Form di klik
			var jumlahP = parseInt($("#jumlahP-form").val()); // Ambil jumlah data form pada textbox jumlah-form
			var nextformP = jumlahP + 1; // Tambah 1 untuk jumlah form nya

            $("#insertP-form").append("	&nbsp;&nbsp;&nbsp;&nbsp;<b>Pelaku ke " + nextformP + " :</b><br>" +
            "<label for='name'> Nama :</labeL> <?php echo "<label class='war'>$Gnama_pelaku</label>"; ?>" +
            "<input name='nama_pelaku[]' type='text' id='nama'>" +
            "<label for='name'> Tempat Lahir : </label> <?php echo "<label class='war'>$Gtempat_lahir_pelaku</label>"; ?>" +    
            "<input name='tempat_lahir_pelaku[]' type='text'>" +
            "<label for='name'>Tanggal Lahir : (0000-00-00) </label> <?php echo "<label class='war'>$Gtanggal_lahir_pelaku</label>"; ?>" +
            "<input type='date' class='tanggal' name='tanggal_lahir_pelaku[]' id='tanggalp' data-date-format='yyyy-mm-dd'>" +
            "<label for='name'> Jenis Kelamin </label>" +
            "<select name='jeniskelamin_pelaku[]'>" +
            "<option value='Laki-laki'>Laki-Laki</option>" +
            "<option value='Perempuan'>Perempuan</option>" +
            "</select>" +
            "<br>" +
            "<label for='name'> Alamat</label> <?php echo "<label class='war'>$Galamat_pelaku</label>"; ?>" +
            "<textarea name='alamat_pelaku[]' type='text'></textarea>");
           $("#jumlahP-form").val(nextformP); // Ubah value textbox jumlah-form dengan variabel nextform
				});
		
		// Buat fungsi untuk mereset form ke semula
		$("#btn-resetP-form").click(function(){
			$("#insertP-form").html(""); // Kita kosongkan isi dari div insert-form
			$("#jumlahP-form").val("1"); // Ubah kembali value jumlah form menjadi 1
		});
	});
	</script>

    
</div>
 <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</html>