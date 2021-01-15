<?php	

		$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbbreak = "pengaduan";

                  
                    $conn = new mysqli($servername, $username, $password, $dbbreak);
					if ($conn->connect_error) 
					{
                        die("Connect Error: " . $conn->connect_error);
                    }
					else
					{
                       
                    }

                    ?>