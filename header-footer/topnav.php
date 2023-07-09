<!DOCTYPE html>
<html>
      <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="../sourcefiles/CSS/topnav.css">
          <link rel="stylesheet" href="../sourcefiles/CSS/images.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      </head>
      <body>
          <div class="topnav" id="myTopnav">
              <div class="logo">
                <a href="#"><img src="../images/logo.jpeg" alt="LOGO"</a>
              </div>
                <a href="#">Ministries</a>
                <a href="#">Activities</a>
                <a href="#">Location</a>
                <a href="#">Services</a>
                <a href="#">Our Projects</a>
                <a href="#">Online Giving</a>
                <a href="#">Donations</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                </a>
             </div>
          <script>
          function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            }else {
              x.className = "topnav";
            }
          }
          </script>
      </body>
</html>
