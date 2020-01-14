<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="SockShop is a webshop for all types of socks, sports, casual, Christmas and more. Get your socks here!">
  <meta name="keywords" content="socks, webshop, christmas socks, christmas, sport socks, sport, happy, sockshop, nike, new socks">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="../app/view/assets/js/app.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="../app/view/assets/css/styles.css">
  <link rel="icon" href="../app/view/assets/images/themeSocksLogo.png" type="image/png" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="fixed-top navigation">
      <div class="row">
        <div class="col-md-5">
          <a class="brand" href="index.php">
            <h1>ThemeSocks</h1>
          </a>
        </div>
        <div class="col-md-2 cart-container" onclick="openCart()">
          <a class="cart-btn">
            <!--For modern browsers-->

            <i class="material-icons">
              shopping_cart
            </i><br />
            <div id="cart">Socking Cart</div>
          </a>
        </div>
      </div>

    </nav>
    <div id="socking-cart">
      <div class="row">
        <div class="col-md-5">

        </div>
        <div class="col-md-2 shopping-cart">

        </div>
        <div class="col-md-5">

        </div>
      </div>
    </div>

  </header>