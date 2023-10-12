<?php
	define("id_produk", "Pr-001");
	$nama = $_GET['nama_produk'];
	$desk = $_GET['deskripsi'];
	$stok = $_GET['stok_produk'];
	$Harga = $_GET['harga_jual'];

	$kd_produk = $_GET['id_produk'];

	$url_back_form = "http://localhost/5829/form_barang.php?deskripsi=$desk";
		
		$arr_produk[] = [
			'kode' => 'Pr-006',
			'nama' => 'Sprite',
			'stok' => 100,
			'harga' => 6000,
			'deskripsi' => 'Deskripsi 6',
		];
	
		require 'template.php';
		$template = new Template();
	
		$pencarian_id_produk = isset($_GET['cari']) ? $_GET['cari'] : '';
	?>
	
	
	<?= $template->tem_atas('LIST PRODUK')?>
	
	<hr>

	<?php

		if ($kd_produk == id_produk) {
			echo "<h2>Input Error, Kode Produk Sudah Ada !!!</h2>
				<a href='$url_back_form'>Klik untuk kembali ke form</a>
			";
		} else {

			if (($Harga <= 0) && ($stok <= 0)) {
				echo "<h2>Input Error, Harga dan Stok Minimal 1 !!!</h2>
					<a href='$url_back_form'>Klik untuk kembali ke form</a>
				";
			} elseif ($Harga <= 0) {
				echo "<h2>Input Error, Harga Minimal 1 !!!</h2>
					<a href='$url_back_form'>Klik untuk kembali ke form</a>
				";
			} elseif ($stok <= 0) {
				echo "<h2>Input Error, Stok Minimal 1 !!!</h2>
					<a href='$url_back_form'>Klik untuk kembali ke form</a>
				";
			} else {

	?>

	<table border="0">
		<tr>
			<td>ID Produk</td>
			<td>:</td>
			<td>
				<?php echo $kd_produk;  ?>
			</td>
		</tr>
		<tr>
			<td>Nama Produk</td>
			<td>:</td>
			<td>
				<?= $nama; ?>
			</td>
		</tr>
		<tr>
			<td>Deskripsi Produk</td>
			<td>:</td>
			<td>
				<?= $desk; ?>
			</td>
		</tr>
		<tr>
			<td>Stok Produk</td>
			<td>:</td>
			<td>
				<?= $stok; ?> pcs
			</td>
		</tr>
		<tr>
			<td>Harga Produk</td>
			<td>:</td>
			<td>
				<?= 'Rp '.$Harga; ?>
			</td>
		</tr>
	</table>

	<?php 
			}

		}
	?>
	<?= $template->tem_bawah()?>
