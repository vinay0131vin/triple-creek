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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel16.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">One-Bedroom Luxary Cabins</h2>
                    <p>It’s easy to see why the One-Bedroom Luxury Cabins are our most requested accommodations. Each individual cabin is uniquely decorated and provides a plush, comfortable sanctuary from which ranch resort guests can set forth each day to discover new adventures. Most luxury cabins have open floor plans featuring living areas with wood-burning fireplaces that can be seen from the palatial log post king beds. In cabins, the bedroom is fully separated from the living area for complete,privacy. North Star cabin is accessible, with a roll in shower.</p>
                    <p>In all of these luxury cabins, a unique double bath and  share a roomy double steam shower. Each wrap-around deck boasts a private hot tub beneath the whispering pines. While all of these cabins are within leisurely walking distance of the Main Lodge, during non-snow months each cabin includes a golf cart for ease of exploring the property. During snowy months, our Staff cheerfully encourages guests in appropriate ranch vehicles to activities and the Dining Room.</p>
                    <h2 style="text-align: center;">Luxuries</h2>
                    <ul>
                      <li>Sleigh Bed</li>
                      <li>Private hot tub</li>                  
                      <li>Wireless internet</li>
                      <li>Direct dial telephones with complimentary long-distance</li>
                      <li>Satellite television and DVD/blu-ray player</li>
                      <li>Air conditioning</li>
                      <li>Refrigerator</li>
                      <li>In-room safe</li>
                    </ul>
                    <h2 style="text-align: center;">Services</h2>
                    <ul>
                      <li>Daily housekeeping</li>
                      <li>In-cabin dining service</li>
                      <li>Nightly turndown service</li>
                    </ul>
                     <h2 style="text-align: center;">Inclusive Rates</h2>
                     <p>Per night- Rs10000- Two Adults </p>
                     <p>Per Person Rate : Rs 5000.</p>
                     <p>This rate includes:</p><br>
                     <ul>
                       <li>Breakfast, lunch & dinner</li>
                       <li>House wine, spirits & beer</li>
                       <li>All Creek Luxuries</li>
                     </ul>
                      <p>At Triple Creek  we invite you to relax, knowing that your night cabin rate is truly all-inclusive with no hidden fees.</p>

                  </div>
                </main></div></div></div>

<?php 
}
else header("Location:login.php");

 ?>
 <!-- /.wrap -->
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
         var imgs=["hotel16.jpg","hotel22.jpg", "hotel23.jpg"];
         $("#topimg").attr('src',imgs[t]);
         var slide= () => {
            $("#topimg").attr('src',imgs[(++t)%imgs.length]);
         };
         var inter=setInterval(slide,3000);
       </script>
              </body></head></html>