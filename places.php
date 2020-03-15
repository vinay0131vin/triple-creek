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
            
            <?php include("header.php");  ?>
            </div>
<div class="wrap" role="document" style="margin-top: 0px;">
            <div class="content row">
               <main class="main" role="main">
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel38.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Tourist Places</h2>
                    <p>Bangus Valley is a part of unique ecological area which comprises mountain and Grassland. The valley is more beautiful than the famous tourist places in the valley and is also virgin as not many tourists travel to this part of the valley. The valley is blessed with some splendid natural beauty and has yet not faced the destruction of human interference. Natural vegetation, flowers and forests are abundant. It has been proposed to be developed as a Himalayan Biosphere valley by INTACH. The valley is calm, serene and mesmerizing.</p>
                    <p>Bungus can be approached from Srinagar through two routes. One is through Handwara through Satkoji and other through Chowkibal, through Malasari. Transport is not readily available as the road is not in a good condition. The place is yet to be brought on the tourist map of Kashmir and hence you may have a difficult time while reaching there, but the place is worth all the trouble.</p>
                    <p>The large pasturelands of the area produce some of the finest grass in the state. Bungus has more than a hundred meadows. A little more than half of these are on top of plateaux, while the rest are in the plains. The meadows have a great cushioned fee as the grass is soft. The grass has a tremendous nutritional and medicinal value for the cattle.</p>
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
          <script type="text/javascript">
         var t=0;
         var imgs=[ "hotel38.jpg","hotel41.jpg","hotel40.jpg"];
         $("#topimg").attr('src',imgs[t]);
         var slide= () => {
            $("#topimg").attr('src',imgs[(++t)%imgs.length]);
         };
         var inter=setInterval(slide,3000);
       </script>
        </body>
      </head>
      </html>
 <?php } else header("Location:login.php"); ?>