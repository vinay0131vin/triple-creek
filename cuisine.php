
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
            
            <?php 
            session_start();
            include("header.php"); ?>
</div>
<div class="wrap" role="document" style="margin-top: 0px;">
            <div class="content row">
               <main class="main" role="main">
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel45.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Cuisine</h2>
                    <h3 style="text-align: center;">AN ALL-INCLUSIVE DINING EXPERIENCE</h3>
                    <p>Executive Chef Krishna Reddy has been crafting exquisite dining experiences at Triple Creek for over ten years, introducing a new Dinner menu each evening. His finely tuned and adventurous palate informs a diverse menu showcasing distinctive flavors and imaginative presentation. Chef Krishna’s talented team of chefs incorporates the freshest ingredients to prepare uniquely refined dishes to please all palates. For many guests, the meals at Triple Creek are indisputably the highlight of their visit with us.</p>
                    <p>All meals, including snacks and packed lunches, are included in the nightly cabin rate. Our Sommelier will be pleased to recommend a wine pairing from our complimentary selection of house wines, or a purchase from our award-winning cellar of premium vintages. Meals are served in our magnificent vaulted-ceiling Dining Room, or guests may request a Cabin delivery at no additional cost. The dress code is best described as “ranch casual.” Guests are invited to wear whatever feels most comfortable, whether it be jeans and boots, shorts and flip flops, or the finer western wear you don’t get to break out much at home! Chef Krishna and his team are adept at accommodating dietary needs and requests.</p>
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
         var imgs=["hotel45.jpg","hotel46.jpg", "hotel47.jpg","hotel48.jpg"];
         $("#topimg").attr('src',imgs[t]);
         var slide= () => {
            $("#topimg").attr('src',imgs[(++t)%imgs.length]);
         };
         var inter=setInterval(slide,3000);
       </script>
        </body>
      </head>
      </html>
      