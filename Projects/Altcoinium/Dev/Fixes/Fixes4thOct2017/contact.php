<?php 

if(isset($_POST["submit"])) {
	$to = "info@altcoinium.com";
	$name = $_POST['contact_name'];
	$email = $_POST['contact_email'];
	$message = $_POST['contact_message'];

$body = "Name: $name\n\n Email: $email";

mail($to, $body, "Message: $message <$email>");
}
?>







<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
      href="http://www.altcoinium.com/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
      href="http://www.altcoinium.com/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
      href="http://www.altcoinium.com/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
      href="http://www.altcoinium.com/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
      href="http://www.altcoinium.com/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
      href="http://www.altcoinium.com/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
      href="http://www.altcoinium.com/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
      href="http://www.altcoinium.com/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png"
      href="http://www.altcoinium.com/favicon-196x196.png"
      sizes="196x196">
    <link rel="icon" type="image/png"
      href="http://www.altcoinium.com/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png"
      href="http://www.altcoinium.com/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png"
      href="http://www.altcoinium.com/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png"
      href="http://www.altcoinium.com/favicon-128.png" sizes="128x128">
    <meta name="application-name" content="Altcoinium">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage"
      content="http://www.altcoinium.com/mstile-144x144.png">
    <meta name="msapplication-square70x70logo"
      content="http://www.altcoinium.com/mstile-70x70.png">
    <meta name="msapplication-square150x150logo"
      content="http://www.altcoinium.com/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo"
      content="http://www.altcoinium.com/mstile-310x150.png">
    <meta name="msapplication-square310x310logo"
      content="http://www.altcoinium.com/mstile-310x310.png">
    <title>Altcoinium - Contact Us</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="css/template-style.css">
    <link
href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext"
      rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/responsee.js"></script>
    <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
  </head>
  <body class="size-1140">
    <!-- TOP NAV WITH LOGO -->
    <header>
      <nav>
        <div class="line">
          <div class="top-nav">
            <div class="logo hide-l"> <a href="../design/"><font
                  color="#005271">Mobile Site</font> <br>
                <font color="#005271"><strong>ALTCOINIUM</strong></font></a>
            </div>
            <p class="nav-text">Menu</p>
            <div class="search">
              <form action="http://www.altcoinium.com" search.php"=""> <input
                  name="search" style="background:#b1b1b1; font:arial;
                  width:187px; height:30px; color:#FFFFF0;"
                  placeholder=" search here..." "="" submit"=""
                  type="text"> </form>
            </div>
            <div class="top-nav s-12 l-5">
              <ul class="right top-ul chevron">
                <li><a href="index.html">Home</a> </li>
                <li><a href="about.html">About Us</a> </li>
                <li> <a>X-Change How To's</a>
                  <ul>
                    <li><a>Read This First</a> </li>
                    <li><a>Crypto Fundamentals</a> </li>
                    <li> <a>Coinbase</a>
                      <ul>
                        <li><a>What is Coinbase</a> </li>
                        <li><a>Join Coinbase</a> </li>
                        <li><a>Coinbase articles</a> </li>
                        <li> <a>Another Link in Sub menu</a> </li>
                        <li> <a>and another...</a> </li>
                      </ul>
                    </li>
                    <li> <a>A seperate menu heading</a>
                      <ul>
                        <li> <a>New Sub</a> </li>
                        <!-- <li><a href="index.html#services">Services</a> </li> -->
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <ul class="s-12 l-2">
              <li class="logo hide-s hide-m">
                <div align="center">&nbsp; <img src="img/logo.png"
                    alt="Altcoinium" width="50" height="50" align="top"><br>
                </div>
              </li>
            </ul>
            <div class="top-nav s-12 l-5">
              <ul class="top-ul chevron">
                <li><a
href="https://www.lamborghini.com/en-en/models/aventador/aventador-coupe">Another
































                    Menu</a> </li>
                <li> <a>Tutorials</a>
                  <ul>
                    <li><a>Read This First</a> </li>
                    <li><a>Crypto Fundamentals</a> </li>
                    <li> <a>Coinbase</a>
                      <ul>
                        <li><a>What is Coinbase</a> </li>
                        <li><a>Join Coinbase</a> </li>
                        <li><a>Coinbase articles</a> </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="index.html#contact">Contact Us</a> </li>
              </ul>
            </div>
            <!-- contact form -->

            <div class="tm-bg-black-translucent text-xs-left tm-textbox
              tm-2-col-textbox-2 tm-textbox-padding
              tm-textbox-padding-contact
              tm-content-box tm-content-box-right">
              <form action="contact.php" method="post"
                class="tm-contact-form">
                <div class="form-group"> <input id="contact_name"
                    name="contact_name" class="form-control"
                    placeholder="Your Name" required="" type="text"> </div>
                <div class="form-group"> <input id="contact_email"
                    name="contact_email" class="form-control"
                    placeholder="Your Email" required="" type="text"> </div>
                <div align="center">
                  <blockquote>
                    <blockquote>
                      <div class="form-group"> <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required=""></textarea>
                      </div>
                    </blockquote>
                  </blockquote>
                </div>
                <button type="submit" name = "submit" class="tm-submit-btn">submit</button></form>
              <font color="#ffffff"> </font></div>
            <font color="#ffffff"> </font> </div>
        </div>
      </nav>
    </header>
    <section> <img src="img/image-05.jpg.png" alt="Altcoinium"
        style="width: 100%"> </section>
    <footer>
      <div class="line">
        <div class="s-12 l-6">
          <p>Copyright 2017, Altcoinium </p>
        </div>
        <div class="s-12 l-6">
          <p class="right">&nbsp; <br>
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
