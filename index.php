<?php 
include_once __DIR__ . "/server.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Document</title>
</head>
<body>
  <div class="mainwrapper">
    <div class="container mt-5">

      <?php foreach ($my_products as $prod) : ?>
      <div class="card" style="width: 18rem;">
        <!-- <img src="..." class="card-img-top" alt="..."> -->
        <div class="card-body">
        <h5 class="card-title"><?php echo $prod->name  ?></h5>
        <p class="card-text"><?php echo $prod->price  ?>€</p>
        <p class="card-text"><?php echo $prod->category  ?></p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        </div>
      </div>
      <?php endforeach ?>

    </div>
  </div>
</body>
</html>