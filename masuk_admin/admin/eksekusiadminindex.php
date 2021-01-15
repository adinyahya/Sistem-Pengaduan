<?php

session_start();
error_reporting(0);
error_reporting(E_ALL);

if (isset($_SESSION['hak_akses']))
{
    if($_SESSION['hak_akses'] == "1")
    {
        
    }
    else if($_SESSION['hak_akses'] == "2")
    {
            header ("location:../../masuk_user/pengaduan_user.php");
        
    }
}else if(!isset($_SESSION['hak_akses']))
{
	header ("location:../../index.php");
}

include "eksekusiadmin.php"; 
include "koneksi.php"; 
  
?>


<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Eksekusi</title>

	<!-- CSS -->
     <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	
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
    <script src="../../js/jquery.min.js"></script>
    <script type="text/javascript">
    function showHide(){
        var select = document.getElementById("sal");
        var hideninp= document.getElementsByClassName("hid");
        
        for(var i=0;i != hideninp.length;i++)
            {
                if(select.value =="dll" || select.value =="lainya" ){
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
        if(document.getElementById('cek1').checked){
          document.getElementById('form-controlx').style.display = 'block';
          //document.getElementById('form').style.display = 'block';
        }else{
          document.getElementById('form-controlx').style.display = 'none';
          //document.getElementById('form').style.display = 'none';
        }
    }

    var checked=false;
    $('.ssn_byphone').click(function(){
        checked=!checked;
        $(this).prop("checked",checked);
        if($(this).is(':checked'))
        {
            $('#ssn-div').hide();
            $('.ssn_byphone').css('display','block');
            $('#ssn').val('');
        }
        else
        {
            $('#slideUp').show();
        }
    });
    
    </script>
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
                        <li><a href="laporan.php"><i class="fa fa-book fa-fw"></i> Laporan</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
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
    <div id="container">

          <form method="post" action="" class="form" enctype="multipart/form-data">
                      <?php
                        $sql ="SELECT * FROM tb_pengaduan WHERE id = '".$_GET['id']."'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);
                         $sql1 ="SELECT * FROM korban WHERE id = '".$_GET['id']."'";
                        $result1 = mysqli_query($conn,$sql1);
                        $row1 = mysqli_fetch_array($result1);
                         
                         ?>
    <b><label for="name" class="war"> NOMOR REGISTER : <?php echo $row['idregister'];?></label></b>
    <br><br><br>
    <label class="biru" for="name"> IDENTITAS PELAPOR </label>
    <br>
    <label for="name"> Nama : </label>
          <input name="nama_pelapor" type="text" value ="<?php echo $row['nama_pelapor'];?>" >
    <label for="name"> Tempat Lahir : </label> 
          <input name="tempat_lahir_pelapor" type="text" value ="<?php echo $row['tempat_lahir_pelapor'];?>">
    <label for="name"> Tanggal Lahir : </label>
    <input type="date" class="tanggal" name="tanggal_lahir_pelapor" id="tanggalp" data-date-format="yyyy-mm-dd" value ="<?php echo $row['tanggal_lahir_pelapor'];?>">
     
    <label for="name"> Jenis Kelamin</label>
    <?php
        if($row['jeniskelamin_pelapor']=['Laki-laki'])
        {
        echo "<input type='radio' name='jeniskelamin_pelapor'' value='Laki-laki' checked/>Laki-laki";
        echo "<input type='radio' name='jeniskelamin_pelapor' value='Perempuan'/>Perempuan";
        }
        else 
        {  
            echo "<input type='radio' name='jeniskelamin_pelapor'' value='Laki-laki' />Laki-laki";
        echo "<input type='radio' name='jeniskelamin_pelapor' value='Perempuan' checked/>Perempuan";
        }

    ?>
       
  <br> <label for="name"> Alamat</label>
   <br>   
      <textarea name="alamat_pelapor" type="text"><?php echo $row['alamat_pelapor'];?></textarea>
   <label for="name"> No.tlpn/Hp</label>
      <input name="notelp_pelapor" type="text" value ="<?php echo $row['notelp_pelapor'];?>">
  
  <br><br>
  
  <b><label class="biru" for="name"> IDENTITAS KORBAN</label></b>
 <br>
      <label for="name"> Nama </label><br>
          <input  name="nama_korban" type="text" value ="<?php echo $row1['nama_korban'];?>" >
      <label for="name"> Tempat Lahir </label>
            <input name="tempat_lahir_korban" type="text" value ="<?php echo $row1['tempat_lahir_korban'];?>" >
      <label for="name"> Tanggal Lahir </label>
          
         <input type="date" class="tanggal" name="tanggal_lahir_korban" id="tanggalp" data-date-format="yyyy-mm-dd" value ="<?php echo $row1['tanggal_lahir_korban'];?>">
     
     <label for="name"> Jenis Kelamin</label>
    <?php
        if($row1['jeniskelamin_pelapor']=['Laki-laki'])
        {
        echo "<input type='radio' name='jeniskelamin_korban'' value='Laki-laki' checked/>Laki-laki";
        echo "<input type='radio' name='jeniskelamin_korban' value='Perempuan'/>Perempuan";
        }
        else 
        {  
            echo "<input type='radio' name='jeniskelamin_korban'' value='Laki-laki' />Laki-laki";
        echo "<input type='radio' name='jeniskelamin_korban' value='Perempuan' checked/>Perempuan";
        }

    ?>
      <br><label for="name"> Alamat</label>      
          <textarea name="alamat_korban" type="text"><?php echo $row1['alamat_korban'];?></textarea>
     
     <br><br>
     
    
      <label for="name"> tempat kejadian</label>    
                  <input name="tempat_kejadian" type="text" value ="<?php echo $row['tempat_kejadian'];?>">
                  
    <label for="name"> Kronologi </label>
      <textarea name="kronologi" type="text"><?php echo $row['kronologi'];?></textarea>

       <label for="name"> Jenis Kekerasan </label><br>&nbsp;&nbsp;
      <input align="right" type="checkbox" name="jenis_kekerasan1" id="cek" value="Fisik" onclick="showRadio()"/>Fisik<br>&nbsp;&nbsp;
      <input align="right" type="checkbox" name="jenis_kekerasan2" id="cek" value="Psikis" onclick="showRadio()"/>Psikis<br>&nbsp;&nbsp;
      
      <input align="right" type="checkbox"  name="jenis_kekerasan3" id="cek" value="Seksual" onclick="showRadio()"/>Seksual<br>&nbsp;&nbsp;
      <input align="right" type="checkbox"  name="jenis_kekerasan4" id="cek" value="Ekploitasi" onclick="showRadio()"/>Eksploitasi<br>&nbsp;&nbsp;
      
      <input align="right" type="checkbox"  name="jenis_kekerasan5" id="cek" value="Penelantaran" onclick="showRadio()"/>Penelantaran<br>&nbsp;&nbsp;
      <input align="right" type="checkbox"  name="jenis_kekerasan6" id="cek" value="Pendampingan Tokoh Agama" onclick="showRadio()"/>Pendampingan Tokoh Agama<br>&nbsp;&nbsp;
      
      <input align="right" type="checkbox"  name="jenis_kekerasan7" id="cek1" value="lain" onclick="showRadio()"/>Lainya<br>&nbsp;&nbsp;

      <div  id="form-controlx">
       <input  name="jenis_kekerasan8" type="text">
       </div>

        <label for="name"> Jenis Layanan</label>    
      <select id="sal" name="jenis_layanan"  onclick="showHide()">
                    <option value="Kesehatan">Kesehatan</option>
                    <option value="Bantuan Hukum">Bantuan Hukum</option>
                      
                    <option value="Penegakan Hukum">Penegakan Hukum</option>
                    <option value="Rehabilitasi Sosial">Rehabilitasi Sosial</option>
                    
                    <option value="Reintegrasi Sosial">Reintegrasi Sosial</option>
                    <option value="Pemulangan">Pemulangan</option>
                    
                    <option value="lainya">Lainya</option>
                  </select><br>
                  <input name="jenis_layanan2" class="hid" type="text" id="nama">
                  
                   <label for="name"> Tindakan Selanjutnya </label>
      <textarea name="tindakan_selanjutnya" type="text"></textarea>

      <input type="submit" value="KIRIM">  
</form>
</div>
 <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</html>