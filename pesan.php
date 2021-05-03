<?php
require_once('assets/function/menu.php');
if (isset($_GET['nama'])) {
  $namaku = $_GET['nama'];
  $alamat = $_GET['alamat'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="assets/css/stylesheet.css">
  <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="order-wrapper">
    <h2>Keranjang</h2>
    <p class="nama"><?php echo "Nama : " . $namaku ?></p><br>
    <p class="alamat"> <?php echo "Alamat  : " . $alamat ?></p><br>
    <?php $totalBayar = 0; ?>
    <?php foreach ($menus as $menu) : ?>

      <p class="order-amount">
        <?php
        $jmlPesanan = $_GET[$menu->name];
        $menu->setJmlPessanan($jmlPesanan);
        $totalBayar += $menu->getTotalBayar(); ?>

        <!-- Cetak property name milik $menu menggunakan method getName -->
        <?php echo $a = $menu->name; ?>
        x
        <!-- Cetak variable $orderCount -->
        <?php echo $jmlPesanan; ?>
      </p>
      <p class="order-price">Rp. <?php echo $menu->getTotalBayar() ?></p>
    <?php endforeach ?>
    <h3>Harga total: Rp. <?php echo $totalBayar; ?></h3>
    <a href="menu1.php"><button type="button" class="tombol-kembali">Kembali</button></a>
    <a href="https://wa.me/6285748963342"><button type="button" class="tombol-Wa">Oreder Leat WA</button></a>

  </div>
</body>

</html>