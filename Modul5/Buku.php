<?php 
require('model.php');
if (isset($_GET['id_buku'])){
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amayy</title>
	<link rel="stylesheet" type="text/css" href="stylebuku.css">
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
	<div>
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
	<h2 style = "text-align:center;">Buku</h2>
    <table border = "1" class="table table-striped"	>
        <thead>
            <tr>
                <th><p>ID Buku</p></th>
                <th><p>Judul Buku</p></th>
                <th><p>Penulis</p></th>
                <th><p>Penerbit</p></th>
                <th><p>Tahun Terbit</p></th>
                <th><p>Aksi</p></th>
            </tr>
        </thead>
        <tbody>
            <?php
            tampilbuku();
            ?>
        </tbody>
    </table>
    <br></br>
    <a href="formbuku.php">
    <center>
    <button>Tambah Buku</button></a> <br></br>
	</article>
    </center>
</section>
</body>
</html>