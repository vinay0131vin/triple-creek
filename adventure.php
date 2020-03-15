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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel61.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Western Adventures</h2>
                     <h3 style="text-align: center;">LUXURY ADVENTURE VACATIONS IN VALLEY WILDERNESS</h3>
                     <p>Triple Creek  works in partnership with knowledgeable local area outfitters* to offer a thrilling array of Western Adventures. Creek’s vast Bnagus Valley and millions of acres of National Forest still have pockets of nearly untouched frontier country that is ripe for exploration in all seasons. Whether you prefer your view from the back of a horse, a helicopter, a fishing boat, or behind a spirited team of sled dogs, let us help you check a few items off your bucket list.</p>
                     <h2 style="text-align: center;">Snowmobiling</h2>
                     <p>Snowmobile Rides offer the best guided rides in the valley. Explore areas unreachable by car, across pristine wilderness and enjoy the natural beauty of the mountains. Departing Triple Creek Ranch at 9:30 am, guests drive themselves a short fifteen minutes to Rye Creek Lodge to meet your guide. If you find yourself in need of warmer clothing or you didn’t want to pack those bulky suits, valley Adventures has snowsuits in a variety of sizes for a rs 760rental fee along with snow boots. It is recommended that winter boots should be calf-high, lined and paired with wool socks for extra warmth. Triple Creek has a limited supply of complimentary Sorel winter boots on hand for your use. Lunch will be your choice of roasting artisanal hot dogs over an open fire or a packed lunch prepared by our kitchen. Snowmobile adventures are $240 per person or 290 for tandem riders and payable directly to Bitterroot Adventures. Cancellation the morning of is full price.</p>
                    <h2 style="text-align: center;">Mountain Biking</h2>
                    <p>For the more adventurous and athletically fit! A variety of trails wait for those experienced with mountainous terrain. With advance notice, your bikes will be delivered to the ranch for the days you want to bike the area. Bike rentals are 35 per day, per bike with a delivery and pick up fee of 50. For more information, please contact Randy with Valley Bicycles directly at 9121541512 or speak with a Triple Creek Ranch Activity Coordinator.</p>
                    <h2 style="text-align: center;">Whitewater Rafting</h2>
                    <p>This exciting full day adventure is for everyone! With category I, II and III rapids stretched over thirteen miles, enjoy this beautiful river which is referred to as “The River of No Return,” as it flows through a spectacular, rocky canyon. Along the way, a wonderful lunch is served river-side. An additional fee of $108 is assessed and payable to Rawhide Outfitters in advance. Wet suits are available to rent for 8 per person. Guests drive themselves just an hour and fifteen minutes from Triple Creek , to meet their guide at valley at 9:30 am. If guest cancels within 24 hours a full price cancellation policy will be enforced by the outfitter.</p>
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
         var imgs=["hotel61.jpg","hotel62.jpg", "hotel63.jpg"];
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