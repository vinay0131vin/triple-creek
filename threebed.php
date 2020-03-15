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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel30.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Three Bed Luxary</h2>
                    <p>Overlooking a dramatic mountain vista, Three bed Luxary features  generous living space with an open kitchen and dining area, full kitchen, a soaring vaulted ceiling and floor-to-ceiling rock fireplace. A multi-tiered deck overlooks a private trout pond tucked among the Himalyan mountain views in the distance.</p>
                    <p>Luxary is a three bedroom, three bath cabin that comfortably accommodates six guests traveling together, seeking a private setting and abundant space. For larger groups additional guests can be accommodated. It also serves as a magnificent venue for an executive board retreat or other small meeting. It is just under a mile from the Main Lodge and a golf cart is provided during the summer months. During snowy months, we do recommend a car, or Staff will be happy to tale you to the Dining Room and ranch activities.</p>
                    <h2 style="text-align: center;">Luxuries</h2>
                    <ul>
                      <li>Sleigh Bed</li>
                      <li>Private hot tub</li>
                      <li>Wood-burning fireplace</li>
                      <li>Full Kitchen</li>                 
                      <li>Wireless internet</li>
                      <li>Golf cart during non-snowy months</li>
                      <li>Original Western fine art</li>
                      <li>Fresh-baked cookies, fresh fruit and trail mix</li>
                      <li>Direct dial telephones with complimentary long-distance</li>
                      <li>Satellite television and DVD/blu-ray player</li>
                      <li>Air conditioning</li>
                      <li>Refrigerator</li>
                      <li>Guest Room</li>
                      <li>In-room safe</li>
                      <li>Fishing</li>
                      <li>Gym Area</li>
                      <li>All Inclusive Events</li>
                    </ul>
                    <h2 style="text-align: center;">Services</h2>
                      <ul>
                      <li>Daily housekeeping</li>
                      <li>In-cabin dining service</li>
                      <li>Nightly turndown service</li>
                    </ul>
                    <h2 style="text-align: center;">Inclusive Rates</h2>
                     <p>Per night- Rs 50000- Two Adults </p>
                     <p>Per Person Rate : Rs 25000.</p>
                     <p>This rate includes:</p><br>
                     <ul>
                       <li>Breakfast, lunch & dinner</li>
                       <li>House wine, spirits & beer</li>
                       <li>All Creek Luxuries</li>
                     </ul>
                      <p>At Triple Creek  we invite you to relax, knowing that your night cabin rate is truly all-inclusive with no hidden fees.</p>
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
         var imgs=["hotel30.jpg","hotel27.jpg", "hotel29.jpg","hotel31.jpg","hotel32.jpg"];
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