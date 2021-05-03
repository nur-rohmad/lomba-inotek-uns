<?php require_once('assets/function/menu.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/stylesheet.css" type="text/css">
  <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
  <?php include 'assets/view/header.php'; ?>

  <div class="menu1">
    <h1>Makanan</h1>
    <?php foreach ($menus as $menu) :  ?>
      <div class="card-menu" style="width: 18rem;">
        <img src="<?php echo $menu->gambar; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo "Nasi Pecel + " . $menu->name; ?></h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Harga : <?php echo   $menu->harga; ?></li>
            <li class="list-group-item">Kalori : <?php echo $menu->kalori ?></li>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Buat Pesanan </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="GET" action="pesan.php">

              <ul class="list-group list-group-flush">
                <li class="list-group-item"> <label for="nama">Nama :</label> <input type="text" name="nama"> </li>
                <?php foreach ($menus as $menu) : ?>
                  <li class="list-group-item"><label>Nasi Pecel + <?php echo $menu->name; ?> : </label>
                    <input type="text" name="<?php echo $menu->name; ?>" value="0"> </li>
                <?php endforeach; ?>
                <li class="list-group-item"> <label for="alamat">Alamat :</label> <input type="text" name="alamat"></li>

              </ul>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <a href="pesan.php  "> <button type="submit" class="btn btn-primary">Order</button> </a>
          </div>
          </form>
        </div>
      </div>
    </div>
    <button type="button" class="tombol" data-bs-toggle="modal" data-bs-target="#exampleModal">Pesan</button>

  </div>


  <?php include 'assets/view/footer.php'; ?>
</body>

</html>