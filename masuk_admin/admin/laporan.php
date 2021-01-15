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

    <title>Pengaduan</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">





    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">
	
	 <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- menampilkan simbol-->
	<link rel="shortcut icon" href="../images/siap.png" type="image/x-icon">

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
						<li><a href="cetakexcelrun.php"><i class="fa fa-print fa-fw"></i> Print Excel</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            



			<div class="panel-body">
				<div class="table-responsive dataTable_wrapper">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
                                <th>No</th>
								<th>No Register</th>
								<th>Nama Korban</th>
                                <th>Alamat Korban</th>
								<th>Usia Korban</th>
                                <th>Kronologi</th>
								<th>Jenis Kekerasan</th>
								<th>Tindakan Selanjutnya</th>
								<th>Layanan / Action</th>
                              
							</tr>
						</thead>
						<tbody>
							<?php
								$Sql ="SELECT id, idregister, tindakan_selanjutnya, kronologi FROM tb_pengaduan";
                            
							$say = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
							$nomor = 0;
                            
                             while($tampil = mysqli_fetch_array($say)) {
								 $idku = $tampil['id'];
								 $Sql1 ="SELECT * FROM kekerasan WHERE id='$idku'";
								$say1 = mysqli_query($conn, $Sql1)  or die ("Query salah : ".mysqli_error($conn));
								$gas="";
								while($tampil1 = mysqli_fetch_array($say1)) {
									$gas=$gas.$tampil1['nama_kekerasan'].", ";
								}
								 $Sql2 ="SELECT * FROM korban WHERE id='$idku'";
								$say2 = mysqli_query($conn, $Sql2)  or die ("Query salah : ".mysqli_error($conn));
								$tet="";
								$tet2="";
								$tet3="";
								while($tampil2 = mysqli_fetch_array($say2)) {
									$tet=$tet.$tampil2['nama_korban']."<br> ";

									$tet2=$tet2.$tampil2['alamat_korban']."<br> ";

									$tet3=$tet3.$tampil2['usia_korban']."<br> ";
								}

								$nomor++;

								echo '<tr>';
									echo '<td>'.$nomor.'</td>';	
									echo '<td>'.$tampil['idregister'].'</td>';
									echo '<td>'.$tet.'</td>'; 
									echo '<td>'.$tet2.'</td>';
									echo '<td>'.$tet3.'</td>'; 	
									echo '<td>'.$tampil['kronologi'].'</td>';	
									echo '<td>'.$gas.'</td>'; 
									echo '<td>'.$tampil['tindakan_selanjutnya'].'</td>';                       
									echo '<td><a href="eksekusiadminindex.php?id='.$tampil['id'].'" class="btn btn-success">Eksekusi</a>
										<a href="delete.php?id='.$tampil['id'].'" class="btn btn-warning">Hapus</a>
										<a href="cetakperdoc.php?id='.$tampil['id'].'" class="btn btn-info">Cetak</a></td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
 
                      
                 
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>




    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
     <script src="../bower_components/jquery/dist/jquery.min.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
</script>
<script>
	$(function(){
		var duplicate=new Array(), count=0;
		$('#tambahprestasi').on('click', function(){
			count++;
			duplicate[count] = $('.form_prestasi.master_form_prestasi').clone().removeClass('master_form_prestasi');
			duplicate[count].appendTo('.master_prestasi');
		})
		$('#kurangiprestasi').on('click', function(){
			if(!count){
				alert('Form terakhir tidak bisa dihapus.');
			} else {
				duplicate[count].remove();
				count--;
			}
		})
	})
</script>
<script>
	$(function(){
		var duplicate=new Array(), count=0;
		$('#insert').on('click', function(){
			var id_pendaftar = $('#id_pendaftar').val();
			$.ajax({
				type:"POST",
				url:"simpanprestasi.php",
				data:'nama='+nama,
				success:function(data){
					$(data).appendTo('.master_prestasi');
					
				}
			});
			
		})
		$('#delete').on('click', function(){
			var hapuscek = $('input[type="checkbox"][name="pickprestasi[]"]:checked');
			if (hapuscek.length>0)
			{
				var dataprestasi = $('input[type="checkbox"][name="pickprestasi[]"]:checked').serializeArray();
				$.ajax({
					type:"POST",
					url:"hapusprestasi.php",
					data:dataprestasi,
					success:function(data){
						$.each(hapuscek,function(i,val) {
							$(val).parent().remove();
						})
					}
				});
			}
		})
	})
</script>
<script>
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script>

</body>

</html>
