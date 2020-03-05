<!DOCTYPE html>
<html>
<head>
	<title>Total Harga</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elegant Resume Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Oleo+Script:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">

</head>
<body>
	<form method="post">
		<div class="form-group">
			<p><B> HITUNG LOUNDRY</B></p>
		<table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode" class="form-control" placeholder="Kode Barang..."></td>
            </tr>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama" class="form-control" placeholder="Nama Barang..."></td>
			</tr>
			<tr>
				<td>Harga /Kg</td>
				<td>:</td>
				<td><input type="text" name="harga" class="form-control" placeholder="Harga Barang..."></td>
			</tr>
			<tr>
				<td>Banyaknya</td>
				<td>:</td>
				<td>
					<select name="qty" class="form-control">
						<option value="">- Jumlah -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr><br>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" class="btn btn-info" name="hitung" value="Hitung">
					<input type="reset" class="btn btn-danger " name="batal" value="Batal">
				</td>
			</tr>
		</table>
						</div>
	</form>
	<hr>
	<h2>Hasil :</h2>
        <!--CODE PHP HERE-->
        <?php
		if(isset($_POST['hitung'])){
            $kode = $_POST['kode'];
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$qty = $_POST['qty'];
			$total = $harga*$qty;
 
			echo "
				<table border='1' class='table table-hover'>
                    <tr>
                        <th>Kode Barang</th>
						<th>Nama Barang</th>
						<th>Harga</th>
						<th>Banyaknya</th>
						<th>Total Harga</th>
					</tr>
                    <tr>
                        <td>$kode</td>
						<td>$nama</td>
						<td>$harga</td>
						<td>$qty</td>
						<td>$total</td>
					</tr>
				</table>
			";
		}
?>
</body>
</html>