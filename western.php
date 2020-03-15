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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel42.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Western Art Collection</h2>
                    <p>An important cultural bridge between the Indian subcontinent and regions to the west and east for over two millennia, the Kashmir Valley was a vibrant hub of intellectual activity for its Buddhist, Hindu, and Muslim populations. Multiple cultural influences have fostered a unique artistic environment of diverse aesthetics, witnessed in this landmark exhibition of 130 sumptuous objects of exemplary quality, dating from the 2nd to the 20th centuries.</p>
                    <p>The Arts of Kashmir comprises works of Buddhist, Hindu, and Islamic art, including sculpture, painting, and calligraphy loaned from collections in the U.S., Europe, and India. Many of the objects have never been seen outside of India; in some cases they have never been exhibited or published anywhere.</p>
                    <p>To provide a sense of the broad artistic contributions of this famously lush and beautiful region, the exhibition includes examples of stone and bronze sculptures and manuscript paintings, in addition to the fine examples of papier-mâché, carpets, shawls, and embroidery for which Kashmir is renowned.</p>
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
         var imgs=[ "hotel42.jpg","hotel43.jpg","hotel44.jpg"];
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