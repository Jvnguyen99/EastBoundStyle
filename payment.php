<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1 //EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns= "http://www.w3.org/1999/xhtml">

  <body>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Order Confirmation - Eastbound Style</title>
  <link href="css/cppstylesheet.css" rel="stylesheet" type="text/css">
  <link rel="icon" href="assets/favicon.png">
</head>

<body>
  <?php $name = $_POST["cardname"]; ?>
  <div id="wrapper">
    <div id="banner">
      <img src="assets/banner.png" alt="banner" style="width: 100%; height: 100%">
    </div>
    <div id="navigation">
      <hr>
      <ul id="navItems">
        <li><a href="index.html">HOME</a></li>
        <li><a href="gallery.html">GALLERY</a></li>
        <li><a href="blog.html">BLOG</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
      </div>

      <div id="order">

          <?php echo("<h1>Order Confirmation</h1>");
                echo("<i><b>$name</b></i>, your order is being processed");
          ?>

      </div>



  </div>
</body>
<script>
/* This function toggles between hiding and showing the dropdown content when clicked on */
function showUser() {
  document.getElementById("showUserDrop").classList.toggle("shows");
}
</script>

</html>
