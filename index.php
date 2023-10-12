<?php
	/*$kode_arr = ['Pr-001', 'Pr-002', 'Pr-003', 'Pr-004', 'Pr-005'];
	$nama_arr = ['Nutrisari', 'Jasjus', 'Marimas', 'Finto', 'Cola-cola'];
	$stok_arr = [10, 12, 20, 31, 30];
	$harga_arr = [1000, 1200, 2000, 3100, 3000];
	$deskripsi_arr = ['Jeruk kok makan jeruk', 'Deskripsi 2', 'Deskripsi 3', 'Deskripsi 4', 'Deskripsi 5'];*/

	$arr_produk = [
		[
			'kode' => 'Pr-001',
			'nama' => 'Nutrisari',
			'stok' => 10,
			'harga' => 1000,
			'deskripsi' => 'Jeruk kok makan jeruk'
		],
		[
			'kode' => 'Pr-002',
			'nama' => 'Jasjus',
			'stok' => 12,
			'harga' => 1200,
			'deskripsi' => 'Deskripsi 2'
		],
		[
			'kode' => 'Pr-003',
			'nama' => 'Marimas',
			'stok' => 20,
			'harga' => 2000,
			'deskripsi' => 'Deskripsi 3',
		],
		[
			'kode' => 'Pr-004',
			'nama' => 'Finto',
			'stok' => 31,
			'harga' => 3100,
			'deskripsi' => 'Deskripsi 4',
		],
		[
			'kode' => 'Pr-005',
			'nama' => 'Cola-cola',
			'stok' => 30,
			'harga' => 3000,
			'deskripsi' => 'Deskripsi 5',
		],
	];

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

	<hr/>
	<br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>Deskripsi</th>
			<th>Opsi</th>
		</tr>

		<?php //for ($i = 0; $i < count($arr_produk); $i++ ) { ?>

		<?php foreach ($arr_produk as $index => $nilai) { ?>
		<tr>
			<td><?= ($index + 1) ?></td>
			<td><?= $nilai['kode'] ?></td>
			<td><?= $nilai['nama'] ?></td>
			<td><?= $nilai['stok'] ?></td>
			<td>Rp <?= $nilai['harga'] ?></td>
			<td><?= $nilai['deskripsi'] ?></td>
			<td>
				<button>
					<a href="<?= 'keranjang_proses.php?id_produk='.$nilai['kode'].'&nama='.$nilai['nama'].'&harga='.$nilai['harga'];?>">Tambahka Ke keranjang</a>
				</button>
			</td>
		</tr>

		<?php } ?>
		
	</table>


	<?= $template->tem_bawah()?>
