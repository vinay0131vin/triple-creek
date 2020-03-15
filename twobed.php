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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel20.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Two Bed Luxary</h2>
                    <p>Our two-bedroom luxury cabins offer matching master bedroom suites that share generous, well-appointed living areas and sprawling outdoor decks with private hot tubs. Each master bedroom boasts one of our colossal log post king beds and an en suite bathroom with a palatial double steam shower. These cabins are ideal accommodations for two singles, two couples, or families with adult children.</p>
                    <p>At loghouse we design and build a comprehensive range of premium quality log cabins and log houses intended speciﬁcally for the room and to climate weather conditions that Triple Creek provides. We oﬀer the widest choice of log buildings available in Resort which include four and ﬁve bedroom homes, holiday chalets, multi function log cabins, garages, and garden rooms.ie, we offer a “bespoke” or custom design service to tailor all our pre-engineered models to your needs or start from scratch with your own idea with help from our highly qualified team of planners and log cabin experts, we will guide you through the design process.</p>
                    <h2 style="text-align: center;">Luxuries</h2>
                    <ul>
                      <li>Sleigh Bed</li>
                      <li>Private hot tub</li>
                      <li>Wood-burning fireplace</li>                 
                      <li>Wireless internet</li>
                      <li>Golf cart during non-snowy months</li>
                      <li>Original Western fine art</li>
                      <li>Fresh-baked cookies, fresh fruit and trail mix</li>
                      <li>Direct dial telephones with complimentary long-distance</li>
                      <li>Satellite television and DVD/blu-ray player</li>
                      <li>Air conditioning</li>
                      <li>Refrigerator</li>
                      <li>In-room safe</li>
                      <li>Fishing</li>
                    </ul>
                     <h2 style="text-align: center;">Services</h2>
                      <ul>
                      <li>Daily housekeeping</li>
                      <li>In-cabin dining service</li>
                      <li>Nightly turndown service</li>
                    </ul>
                    <h2 style="text-align: center;">Inclusive Rates</h2>
                     <p>Per night- Rs 30000- Two Adults </p>
                     <p>Per Person Rate : Rs 15000.</p>
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
         var imgs=["hotel20.jpg","hotel24.jpg", "hotel25.jpg","hotel26.jpg"];
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