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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel64.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Relaxation</h2>
                     <h2 style="text-align: center;">Massage</h2>
                     <p>Massages in the Privacy of your Cabin is the ultimate in relaxation! These full-body massages given by local certified professional therapists will enhance the senses and ease away aches and tension for days. With the use of essential oils that calm and relax, therapists work their magic. A fee of 195 for a 60 minute massage, 275 for a 90 minute massage or 350 for a 2 hour massage, per person will be assessed. For your convenience, massage therapy charges will be added to your bill. Please note if cancellation is necessary within twenty-four hours, you will be charged full price. Same day reservations are sometimes available, though we recommend at least 24 hours advance reservations. Please speak to an Activities Coordinator to schedule your massage.</p>
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