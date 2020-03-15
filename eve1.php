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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel68.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Holidays</h2>
                     <h2 style="text-align: center;">Summer Holidays</h2>
                     <p>Retreat to Triple Creek  for a lively yet intimate celebration when the ranch is imbued with the festive spirit of the season and adorned in all its holiday finery. Experience a cowboy  with old-fashioned fun in the snow, including horseback riding, ice fishing, sledding, skijoring and skiing in the Valley Rockies, where the crisp, clean, cold mountain air refreshes and invigorates. Select a real or artificial tree for your cabin and decorate it with our ornaments or those you’ve brought from home, or allow us the pleasure of decorating for you!</p>
                     <p>Return to the warmth of your fire-lit cabin with cheeks flushed from a day on the ski slopes, racing the winter breeze on a dog sled, or a tranquil horseback ride through the wintry countryside. Whether you choose to play in the pristine wilderness or relax in the plush comfort of your cabin with its sparkling wood-burning fire, your holiday at Triple Creek will be a felicitous end to the year.</p>
                     <h2 style="text-align: center;">New Year’s Eve Party</h2>
                     <p>Triple Creek welcomes the New Year in our distinctive, elegant cowboy style! Savor a special candle-lit, four course dinner, then adjourn to Elk Meadow for an evening of games and entertainment. Raise your champagne glass for a midnight toast as our signature New Year’s Eve fireworks fill the starry sky with their brilliant light.</p>
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
         var imgs=["hotel68.jpg","hotel69.jpg", "hotel70.jpg"];
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

