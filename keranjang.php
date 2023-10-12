<?php
session_start();
require 'template.php';
$template = new Template();
?>

<?= $template->tem_atas('KERANJANG BELANJA') ?>

<table border="1">
    <tr>
        <th>Nama Produk</th>
        <th>Jumlah Beli</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($_SESSION['keranjang'] as $index => $row ) { ?>
        <tr>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jumlah'] ?></td>
            <td><?= $row['harga'] ?></td>
            <td>
                <form action="hapus_item.php" method="post">
                    <input type="hidden" name="index" value="<?= $index ?>">
                    <input type="submit" value="Hapus">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<?= $template->tem_bawah() ?>
