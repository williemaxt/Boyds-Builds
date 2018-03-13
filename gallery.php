<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <script src="https://use.fontawesome.com/513897fbf7.js"></script>
    <script src="js/index.js" type="text/javascript">
    </script>

    <title>Boyd's Builds</title>

    <style>
    @import url('https://fonts.googleapis.com/css?family=Barlow+Condensed');
    body{
      margin: 0;
      padding:0;
      background: #fff;
      text-align: center;
      font-family: 'Barlow Condensed', sans-serif;
    }
    main{
      width: 80%;
      margin: 0px auto;
    }
    header{
      text-align: left;
    }
    footer{

    }
    .divImg{
      width:150px;
      margin:0px auto;
    }
    .thumbnails{
      width: 25%;
      display:inline-block;
      margin: 10px;
      background: #fff;
      padding: 20px;
      box-sizing: border-box;
    }
    .thumbnails img{
      width: 100%;
      height: auto;
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/main.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <a href="#" class="burger-nav"></a>
      <h1>Boyds Builds</h1>

    <nav>
      <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href="order.html">Order</a></li>
          <li><a href="aboutus.html">About Us</a></li>
          <li><a href="payment.html">Payment</a></li>
      </ul>
    </nav>
  </header>

  <div id="homeImg2" class="HeadImg">
    <h1>View Our Extensive Gallery</h1>
  </div>

    <main>
      <h1>Image Gallery</h1>
      <?php
          $dir = glob('galImages/{*.jpg,*.png}',GLOB_BRACE);

          foreach ($dir as $key => $value) {
            ?>
            <div class="thumbnails">

                <img src = "<?php echo $value; ?>" alt="<?php echo $value; ?>">
                </div>
            <?php

          }
            ?>


    </main>


    <footer class="footer-distributed">

    			<div class="footer-left">

    				<h3>Coded By<span> 611 Solutions, LLC</span></h3>

    				<p class="footer-links">
    					<a href="#">Home</a>
    					·
    					<a href="#">Gallery</a>
    					·
    					<a href="#">Create</a>
    					·
    					<a href="#">About Us</a>
    					·
    					<a href="#">Payment</a>

    				</p>

    				<p class="footer-company-name">Boyd's Builds &copy; 2018</p>
            <p>Tel: 000-000-0000</p>

    				<div class="footer-icons">

    					<a href="#"><i class="fa fa-facebook"></i></a>
    					<a href="#"><i class="fa fa-twitter"></i></a>
    					<a href="#"><i class="fa fa-linkedin"></i></a>
    					<a href="#"><i class="fa fa-github"></i></a>

    				</div>

    			</div>

    			<div class="footer-right">

    				<p>Contact Us</p>

    				<form action="quick_email.php" method="post">

    					<input type="text" name="email" placeholder="Email" />
    					<textarea name="comments" placeholder="Message"></textarea>
    					<button>Send</button>

    				</form>

    			</div>

    		</footer>
  </body>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="js/menu.js"> </script>
</html>
