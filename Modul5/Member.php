<?php 
require('model.php');
if (isset($_GET['id_member'])){
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amayy</title>
	<link rel="stylesheet" type="text/css" href="stylemember.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
	<style type="text/css">

	.link_none{
	color: white;
	}

	button {
	padding: 12.5px 30px;
	border: 0;
	border-radius: 100px;
	background-color: #737373;
	color: #ffffff;
	font-weight: Bold;
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	}

	button:hover {
	background-color: grey;
	box-shadow: 0 0 20px white;
	transform: scale(1.1);
	}

	button:active {
	background-color: #black;
	transition: all 0.25s;
	-webkit-transition: all 0.25s;
	box-shadow: none;
	transform: scale(0.98);
	}

	ul{
		list-style-type: none;
		overflow: hidden;
		background-color: #737373;
		background-repeat: no-repeat;
		padding-left: 18px !important;
		background-image: url("gambar/logo1.png");
		background-size: 8%;
		background-position: 5%;
		
	}
	li a{
		display: block;
		color: white;
		text-align: center;
		padding: 20px 20px;
		text-decoration: none;
	}
	li{
		float: right;
	}
	li a:hover{
		background-color: #272727;
	}
	.active{
		background-color: #272727;
	}

	</style>
</head>
<body>

<header>
	<div class="active">
			<ul><font face="forte" class="amayy"> 
				<li><a href="Peminjaman.php" class="link_none">Peminjaman</a></li>
				<li><a href="Member.php" class="link_none">Member</a></li>
				<li><a href="Buku.php" class="link_none">Buku</a></li>
			</font>
			</ul>	
	</div>
</header>
<section>
	<article>
		<h2 style= "text-align:Center">Member</h2>
        <center>
    <table border = "1" class="table table-striped">
        <thead>
            <tr>
                <th><p>ID Member</p></th>
                <th><p>Nama</p></th>
                <th><p>Nomor</p></th>
                <th><p>Alamat</p></th>
                <th><p>Tanggal Daftar</p></th>
                <th><p>Tanggal Terakhir Bayar</p></th>
                <th><p>Aksi</p></th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilmember();
            ?>
        </tbody>
    </table>
	</center>
    <br></br>
    <a href="formmember.php"><button>Tambah Member</button></a>
 <br></br> <br></br>
	</article>
</section>

</body>
</html>