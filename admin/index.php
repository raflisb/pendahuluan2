<?php 
session_start();
if ($_SESSION['stats'] == "true")
{}
else {
	header("location:../");
}
?>

<html> 
	<head>
		<title>
			Rafli Setiawan 
		</title>
	<link rel="stylesheet" href="../assets/css/styles.css" type="text/css" />
</head>
<body>
	<div class="header">
		<p></p>
	</div>
	<div class="menu">
		<div class="nav">
		<ul>
			<li>
				<div class="dropdown">
					<a href="#"> Home </a>
						<div class ="drop-list">
							<a href="#">coy</a>
						</div>
				</div>
			</li>

			<li>
				<div class="dropdown">
					<a href="#"> About</a>
						<div class="drop-list">
							<a href="#">Our Service </a>
						</div>
				</div>
			</li>

			<li>
				<div class="dropdown">
					<a href="#"> Contact Us </a>
						<div class="drop-list">
							<a href="#">Our Office </a>
						</div>
				</div>
			</li>

			<li>
				<div class="dropdown">
					<a href="../logic/logout.php"> Log out </a>
				</div>
			</li>

		</ul>
		</div>
	</div><br><br>
		<hr>

	<div class="content-box"> 

		<div class="box-foto">
			<center><img src="../assets/img/rafli.png" height="300px"></center><br>
			<?php echo $_SESSION['username'];?> 
		</div>
	

		<div class="box-bio"> 
			<table>
				<tr>
					<td>Nama</td>
					<td> : </td>
					<td>Rafli Setiawan Bantu</td>
				</tr>

				<tr>
					<td>Alamat</td>
					<td> : </td>
					<td>Jalan Teluk Aru Utara 1</td>
				</tr>

				<tr>
					<td>Tempat & Tgl lahir</td>
					<td> : </td>
					<td> Surabaya, 22 Juni 1998 </td>
				</tr>

				<tr>
					<td>Jenis Kelamin</td>
					<td> : </td>
					<td> Pria </td>
				</tr>

				<tr> 
					<td> Kewarganegaraan </td>
					<td> : </td>
					<td> Indonesia </td>
				</tr>

				<tr>
					<td> Agama </td>
					<td> : </td>
					<td> Islam </td>
				</tr>

				<tr>
					<td> Nomor Hp </td>
					<td> : </td>
					<td> 0895331812805 </td>
				</tr>

				<tr>
					<td> Email </td>
					<td> : </td>
					<td> raflisetiawan.b@gmail.com </td>
				</tr>
			</table>
				
		


			<p style="font-size: 15px"> Wanna know more about me ? click this link <a href="http://www.dmite.net">Dmite.net</a><br>
				here my GITHUB account <a href="https://github.com/raflisb">https://github.com/raflisb</a>

		</div>
	</div>
	<div class="footer">
		<hr>
		<p><strong>13.2016.1.00525</strong> </p>
	</div>
		
	</div>
</body>
</html>


