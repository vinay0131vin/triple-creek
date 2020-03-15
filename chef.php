<?php
session_start();
if (isset($_SESSION['book']))
{
?>
<html>
   <head>
      <meta charset="utf-8">
      <title>Triple Creek</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <script src="jquery.js"></script>
  <body>
      <div class="base-container">
         <div class="container" style="width: 100%;">
            <div class="logo">
               <a><img src="download2.png" alt="Triple Creek" style="margin-top: -90px;margin-bottom: -50px;"></a>
            </div>
            
            <?php include("header.php"); ?>
</div>
<div class="wrap" role="document" style="margin-top: 0px;">
            <div class="content row">
               <main class="main" role="main">
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel54jpg.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Chef's Table</h2>
                    <h3 style="text-align: center;">PRIVATE DINING AT OUR EXCLUSIVE CHEF’S TABLE</h3>
                    <p>For the ultimate dining experience at Triple Creek, our Culinary Team creates a special experience with a front row seat of the Kitchen in action and offers a stunning look behind the scenes. The Chef’s Table offers the opportunity to explore and savor a variety of tastes created from locally grown produce, fresh seafood, and high quality game meats. Delectable desserts prepared by our Pastry Team create a grand finale to each evening. The talented and personable Chefs of Triple Creek  enhance the experience by personally presenting the courses and sharing their inspiration behind each dish.</p>
                    <h3 style="text-align: center;">SIMPLY ELEGANT CHEF’S TABLE WITH PREMIUM WINE AND BEVERAGE PAIRING</h3>
                    <p>The Chef’s Table Tasting Menu includes wines and beverages from around the world which are selected from our award-winning wine cellar, perfectly matched to heighten each course. With additional insight into the unique world of wine, our dining room staff will bring the character of the respective vintners to life through personal experiences and knowledge.</p>
                    <p>This Seven-Course Menu features Triple Creek Chefs’ artistic culinary creations. Each course is paired with premium wines and beverages personally selected by the Sommelier. The wines are chosen from our temperature-controlled cellar to compliment the unique flavors in each dish. The Chef’s Table is available for $250 per person.</p>
                  </div>
                </main>
              </div>
            </div>
          </div>
          <footer class="content-info" role="contentinfo">
         <div class="container">
            <div class="centered-footer" style="margin-left: 370px;">
               <p><a href="/">Triple Creek</a><br>
                  Bangus Valley<br>Kashmir<br>
                  © 2019 Triple Creek
               </p>
             </div>
           </div>
         </footer>
        </body>
      </head>
      </html>
      <?php } else header("Location:login.php"); ?>  