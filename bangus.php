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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel34.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Bangus Valley</h2>
                    <p>The Bangus Valley is a Himalayan sub-valley of the Kashmir Valley. It is situated in the North area of Kupwara District, in Jammu and Kashmir, of Indian administered Kashmir .</p>
                    <p>Bangus is 72 Kilometers away from Srinagar and lies at an altitude of 10,000 ft. above sea level. The principal valley is locally known as "Badi Bangus" (Big Bangus) and has an estimated area of about 300 Square Kilometers. It consists of a linear elliptical bowl aligned along the east-west axis and is surrounded by Rajwar and Mawar in the east, Shamasbury and Dajlungun Mountains in the west and Chowkibal and Karnah Guli in the north. Kazinag Range (Up to 4732 meters from sea level) in the south. A smaller valley known as "Lokut Bangus" (Small Bangus) lies on the north-eastern side of the main valley.
The valley is traversed by many small streams with nearly 14 tributaries, including the Roshan Kul, Tillwan Kul and Douda Kul. The water of these streams form one of the headwaters of the Kamil River which in turn joins the Lolab stream, thus forming the Pohru River.</p>
                     <div><img id="topimg" style="width: 100%;" src="hotel33.jpg"></div>

                     <h2 style="text-align: center;">A Destination In All Seasons</h2>
                     <p>Bangus is replete with a diverse variety of flora and fauna. The meadows and the slopes of the side plateaus are covered with a range of flowers and medicinal plants. Fresh water fishes of moderate size and their fingerlings inhabit the streams. The valley's forests and plains serve as the breeding, feeding and protection grounds for many wild animal species. The wild life of includes about 50 species of animals and about 10 species of birds. The animal species include the musk deer, antelope, snow leopard, brown bear, black bear, monkeys, and red fox. A large number of residents and migratory birds can also be found feeding and breeding in the valley. The prominent resident birds include pheasants, tragophan, monal pheasant, black partridge, bush quail, and wild fowl.</p>
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
         var imgs=[ "hotel34.jpg","hotel35.jpg","hotel37.jpg"];
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