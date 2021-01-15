<?php
include_once 'gpConfig.php';
unset($_SESSION['token']);
unset($_SESSION['userData']);

//Reset OAuth access token
$gClient->revokeToken();

//Destroy entire session
session_start();
session_destroy();

//Redirect to homepage
 echo "<script> alert('Berhasil!'); window.location='index.php';</script>";
                    
 ?>