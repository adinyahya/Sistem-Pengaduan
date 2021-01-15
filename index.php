<?php
session_start();


function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
if($_SERVER['REQUEST_METHOD'] == "POST") {
    
			
            $userError="";
            $passError="";
            $user=["email"];
            $pass=["password"];
        
            if($_SERVER["REQUEST_METHOD"]=="POST") {
             
           
				   if(empty($_POST["email"])) {
                    $userError="* Tidak boleh kosong";
                } else {
                    if($_POST["email"]) {
                        $user= test_input($_POST["email"]);
                    }
                }
               
                if(empty($_POST["password"])) {
                    $passError="* Tidak boleh kosong";
                } else {
                    if($_POST["password"]) {
                        $pass=test_input($_POST["password"]);
                    }
						
                }
				
 		
               
if(!empty($_POST["email"]) && !empty($_POST["password"])){

					$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbbreak = "pengaduan";

                  
                    $connect = new mysqli($servername, $username, $password, $dbbreak);
					if ($connect->connect_error) 
					{
                        die("Connect Error: " . $connect->connect_error);
                    }
					else
					{
                       
                    }

					$php = "select * from users where email='$user' and password='$pass'";
					$result = mysqli_query($connect,$php);
                    
					if (mysqli_query($connect, $php)){
					
					}
					else
					{
						echo "Error" . $php . "</br>" . mysqli_error($connect);
					}
					


					if($view = mysqli_fetch_array($result))
					{
					$_SESSION['last_name'] = $view['last_name'];
					$_SESSION['email'] = $view['email'];
					$_SESSION['id'] = $view['id'];
                    $_SESSION['hak_akses'] = $view['hak_akses'];
                    $_SESSION['password'] = $view['password'];
                    
                    
                    echo "<script> alert('Berhasil!'); window.location='masuk_admin/admin/laporan.php';</script>";
                    
					}
					else
					{
						echo "<script>alert ('Email atau Password salah');</script>";
				        echo "<script> window.location='index.php';</script>";
						
						
					}
					mysqli_close($connect);
}
			}
			

}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Pengaduan2017</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  

<div class="pen-title">
  <h1>Pengaduan 2017</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form method="post" action="">
      <input type="text" name="email" placeholder="Username"/>
      <input type="password" name ="password" placeholder="Password"/>
      <button type="submit">Login</button><br>
      <?php
//Include GP config file && User class
include_once 'gpConfig.php';
include_once 'User.php';



if(isset($_GET['code'])){
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($redirectURL, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
	$gClient->setAccessToken($_SESSION['token']);
}

if ($gClient->getAccessToken()) {
	//Get user profile data from google
	$gpUserProfile = $google_oauthV2->userinfo->get();
	
	//Initialize User class
	$user = new User();
	
	//Insert or update user data to the database
    $gpUserData = array(
        'oauth_provider'=> 'google',
        'oauth_uid'     => $gpUserProfile['id'],
        'first_name'    => $gpUserProfile['given_name'],
        'last_name'     => $gpUserProfile['family_name'],
        'email'         => $gpUserProfile['email'],
        'gender'        => $gpUserProfile['gender'],
        'locale'        => $gpUserProfile['locale'],
        'picture'       => $gpUserProfile['picture'],
        'link'          => $gpUserProfile['link'],
        'hak_akses'     => '2'
        
    );
    $userData = $user->checkUser($gpUserData);
	
	//Storing user data into session
	$_SESSION['userData'] = $userData;
	$_SESSION['last_name'] = $userData['last_name'];
	$_SESSION['hak_akses'] = $userData['hak_akses'];
	$_SESSION['email'] = $userData['email'];
    $_SESSION['id'] = $userData['id'];
    
	$_SESSION['oauth_provider'] = $userData['oauth_provider'];
	header ("location:masuk_user/user/pengaduan_user.php");
	exit();
	//Render facebook profile data
    if(!empty($userData)){

      //  $output = '<h1>Google+ Profile Details </h1>';
        //$output .= '<img src="'.$userData['picture'].'" width="300" height="220">';
        //$output .= '<br/>Google ID : ' . $userData['oauth_uid'];
        //$output .= '<br/>Name : ' . $userData['first_name'].' '.$userData['last_name'];
        //$output .= '<br/>Email : ' . $userData['email'];
        //$output .= '<br/>Gender : ' . $userData['gender'];
        //$output .= '<br/>Locale : ' . $userData['locale'];
        //$output .= '<br/>Logged in with : Google';
        //$output .= '<br/><a href="'.$userData['link'].'" target="_blank">Click to Visit Google+ Page</a>';
        //$output .= '<br/>Logout from <a href="logout.php">Google</a>'; 
    }else{
        $output = '<h3 style="color:red">Some problem occurred, please try again.</h3>';
    }
} else {
	$authUrl = $gClient->createAuthUrl();
	$output = '<a href="'.filter_var($authUrl, FILTER_SANITIZE_URL).'"><img src="images/glogin.png" alt=""/></a>';
}
?>

<div><?php echo $output; ?></div>

    </form>
  </div>
  
  <div class="cta"><a href="forget.php">Forgot your password?</a>&nbsp;&nbsp;<a href="indexregister.php">Daftar</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
