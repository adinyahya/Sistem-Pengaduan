<?php	

		$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbbreak = "pengaduan";

                    $pdo = new PDO('mysql:host='.$servername.';dbname='.$dbbreak, $username, $password);
                    $conn = new mysqli($servername, $username, $password, $dbbreak);
					if ($conn->connect_error) 
					{
                        die("Connect Error: " . $conn->connect_error);
                    }
					else
					{
                       
                    }

                    ?>