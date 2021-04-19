<?php
session_start();
error_reporting(0);
$user = $_SESSION['username'];
if(empty($user) )
 {
	echo "<script>
			alert('Anda Bukan Admin!');
			window.location.href='../login.php'
			</script>";
 }
?>
<style type="text/css">
		/* Table */
		body {
		font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana	
		}
		.demo-table {
			vertical-align:top;
			border-collapse: collapse;
			font-size: 13px;
			text-align:left;
		}
		.demo-table th, 
		.demo-table td {
			padding: 10px 20px;
		}
		.demo-table .title {
			caption-side: bottom;
			margin-top: 11px;
		}
		.demo-table thead th:last-child,
		.demo-table tfoot th:last-child,
		.demo-table tbody td:last-child {
			border: 1px;
		}

		/* Table Header */
		.demo-table thead th {
			border-right: 1px solid #c7ecc7;;
			text-transform: uppercase;
		}

		/* Table Body */
		.demo-table tbody td {
			color: #669966;
			border-right: 1px solid #c7ecc7;
			table-layout:auto;
		}
		.demo-table tbody tr:nth-child(odd) td {
			background-color: #f4fff7;
		}
		.demo-table tbody tr:nth-child(even) td {
			background-color: #dbffe5;
		}
		.demo-table tbody td:nth-child(4),
		.demo-table tbody td:first-child,
		.demo-table tbody td:last-child {
			text-align:left;
		}
		.demo-table tbody tr:hover td {
			background-color: #CCCCCC;
			border-color: #ffff0f;
			transition: all .2s;
		}

		/* Table Footer */
		.demo-table tfoot th {
			border-left: 1px solid #c7ecc7;
		}
		.demo-table tfoot th:first-child {
			text-align:left;
		}
		</style>
<html>
	<body>
		<center><h2>DATA SURAT MASUK</h2></center>
		<table class="demo-table table table-responsive" >
		<thead style="background:grey;">
		<tr>
			<td align="center">Id</td >
			<td align="center">Incoming At</td >
			<td align="center">Mail Code</td >
			<td align="center">Mail Date</td >
			<td align="center">Mail From </td >
			<td align="center">Mail To </td >
			<td align="center">Subject</td >
			<td align="center">Description</td >
			<td align="center">File Upload</td >
			<td align="center">Action</td >
			<td width="120" align="center">Disposition</td >
		</tr>
		</thead>

		  
<?php
include_once "koneksi.php";
#error_reporting(0);

$sql = mysqli_query($koneksi,"  SELECT * FROM mail   where id_type='1'");
if(!$sql){
echo mysqli_error();
}
while($data = mysqli_fetch_assoc($sql)){
	?>
	<tbody>
		<tr>
		<td><?php echo $data['id_mail']; ?></td>
		<td><?php echo $data['incoming_at']; ?></td>
		<td><?php echo $data['mail_code']; ?></td>
		<td><?php echo $data['mail_date']; ?></td>
		<td><?php echo $data['mail_from']; ?></td>
		<td><?php echo $data['mail_to']; ?></td>
		<td><?php echo $data['mail_subject']; ?></td>
		<td><?php echo $data['description']; ?></td>
		<td><a href="surat/file/<?php echo $data['file_upload']; ?>" >download file</a></td>
		<td><center>
			<a href="index.php?page=delete_mail&deleteid_mail=<?php echo $data['id_mail']; ?>" 
			onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['mail_subject']; ?>')" 
			button class="btn btn-danger">
		<span class="glyphicon glyphicon-trash"> Hapus</a>
		</center>
		</td>
		
			
			
		<td><a href="index.php?page=disposition&id_mail=<?php echo $data['id_mail']; ?>" button class="btn btn-success">
		<span class="glyphicon glyphicon-send"> </span> </a>
		<?php
                      
			}
			?>
		<?php
include_once "koneksi.php";
error_reporting(0);

$sql2 = mysql_query("   SELECT * FROM mail , disposition where mail.id_mail = disposition.id_mail and id_type='1'");
if(!$sql2){
echo mysql_error();
}
while($data = mysql_fetch_assoc($sql2)){
	?>
		<a href="index.php?page=view_disposition&id_disposition=<?php echo $data['id_disposition']; ?>" button class="btn btn-warning">
		<span class="glyphicon glyphicon-search"> </span> </a>
		<a href="index.php?page=delete_disposition&id_disposition=<?php echo $data['id_disposition']; ?>" button class="btn btn-danger">
		<span class="glyphicon glyphicon-remove"> </span> </a></td>
		</tr>
		<?php
                      
			}
			?>
	</tbody>

</table>
</body>
</html>
