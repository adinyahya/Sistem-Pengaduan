<!DOCTYPE html>
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


include "iud_pengaduan/koneksi.php"; 
 ?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Print Laporan</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


      <link rel="stylesheet" href="css/stylegawecetak.css">

  
</head>

<body>
     <li align="left" class="dropdown">
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
  <h2>Laporan Document Pengaduan</h2><br><br><br>

<!-- Upload  -->

<form id="file-upload-form" class="uploader">
  <label>
    <div id="start">
    <?php
$Sql ="SELECT id FROM tb_pengaduan";                            
$say = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
while($tampil = mysqli_fetch_array($say)){
$cet = $tampil['id'];
  } 
      echo '<a href="cetakdoc.php?id='.$cet.'" class="btn btn-primary">Cetak Docx</span>';
      echo '<a href="cetakexcel.php?id='.$cet.'" class="btn btn-primary">Cetak Excel</span>';
    
?>
     
  </label>
  
</form>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script  src="js/index.js"></script>
 <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
</body>
</html>
