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
             header ("location:../../masuk_user/user/pengaduan_user.php"); 
    }
}else if(!isset($_SESSION['hak_akses']))
{
    
header ("location:../../index.php");
}


include "updatepassword.php";
include "koneksi.php";

?>
<!DOCTYPE <html></html>

<html lang="en">

<head>
<link rel="icon" type="image/png" href="../img/favicon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaduan2017</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

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
                        <li><a href="laporan.php"><i class="fa fa-book fa-fw"></i> Laporan</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
     





       
           
            <style>
                        .war
                        {
                                    color : red;
                        }
            </style>
            <div class="row">
                <div class="col-lg-12">
                   <h1 class="page-header">Sunting Password</h1>
                    <div class="panel panel-default">
                         <?php
						   echo "<div class='war'>.$md5Ex.</div>";
						   ?>
                        <div class="panel-body">
                          <div class="row">
                                <div class="col-lg-6">
   <form method="post" action="" class="form" enctype="multipart/form-data">

        <div class="form-group">
                  <label for="editpass">New Password</label>
    <input name='editpass' class="form-control" placeholder='*Password Baru' type='password' required="required">
  </div>
     <div class="form-group">
                  <label for="editverpass">Verifikasi Password</label>
    <input name='editverpass' class="form-control" placeholder='*Verifikasi Password' type='password' required="required">
  </div>

<div class="form-group">
<button type="submit">Submit</button>


              </div>

                               </div>
                               </div>    
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

     <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
