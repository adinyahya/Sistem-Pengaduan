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

    <title>pengaduan2017</title>

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
     
        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">&nbsp;Setting</h1>
                </div>
                <!-- /.col-lg-12 -->
           
                   <div class="col-lg-6">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
							
		                          <table class="table">
                                    
                                  
                                    <tbody>
                                   <?php

                                   ?>
                                     <tr class="info">
                                            <td>Nama User : </td>
                                            <td>
											<?php
											echo $_SESSION['last_name'];
											?>
											</td>
                                            <td></td>
                                        </tr>
                                            <tr class="success">
                                            <td>Email : </td>
                                            <td>
											<?php
											echo $_SESSION['email'];
                                          
                                            
											?>
											</td>
                                            <td></td>
                                        </tr>
                                        
                                           <?php if(empty($_SESSION['oauth_provider']))
                                        {

											$id = $_SESSION['id'];
                                            echo "<tr class='danger'>";
                                            echo "<td> Password : </td>";
                                            echo "<td>";
											echo "********";
                                            echo "</td>";
                                            echo "<td><a href='edit_password.php?id=$id'>Sunting</a></td>";
                                            echo "</tr>";
							          
                                        }
                                     ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
     

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
