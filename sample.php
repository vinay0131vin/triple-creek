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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel49.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">Sample Menus</h2>
                    <h2 style="text-align: center;">Sample Breakfast Menu:</h2>
                    <ul>
                      <li>Two Farm Fresh Eggs Any Style - Served with roast potatoes, baked tomato and toast</li>
                      <li>Continental - Selection of homemade breakfast breads, croissants and Danish, seasonal fruit and Greek yogurt</li>
                      <li>Buttermilk Pancakes - Three pancakes, apple and rhubarb preserve, pure maple syrup, your choice of a side</li>
                      <li>Three Egg Omelet - Served with roast potatoes, baked tomato and toast</li>
                      <li>French Toast - Served with pure maple syrup and vanilla butter, your choice of a side</li>
                      <li>Hot Oatmeal - Bruleed bananas, raisins and brown sugar, served with seasonal fruit and toast</li>
                    </ul>
                    <h2 style="text-align: center;">Sample Lunch Menu:</h2>
                    <h3 style="text-align: center;">Starters:</h3><br>
                    <ul>
                      <li>Daily Soup - House made prepared daily</li>
                      <li>Seafood Chowder GFF - Basil and Gruyere scone</li>
                    </ul>
                    <h3 style="text-align: center;">Salads:</h3><br>
                    <ul>
                      <li>Market Greens and Seedlings GF - Pickled carrots, Ontario radish, parsnip chips</li>
                      <li>Caesar Salad GFF - Homemade horseradish and olive Caesar dressing</li>
                      <li>Cumin Roasted Carrot Salad GF - Almonds, ginger dressing</li>
                      <li>Prosciutto and Brie Flatbread - Arugula, tomato, basil pesto, green olives</li>
                    </ul>
                      <h3 style="text-align: center;">Main Menu:</h3><br>
                      <ul>
                        <li>Pan Seared Salmon GF - Beets, asparagus, horseradish cream ,Toasted almonds, seedling salad</li>
                        <li>Grilled 6oz Flat Iron Steak - Fresh cut fries, baked tomato, asparagus,Homemade chicken gravy</li>
                        <li>Shrimp and Avocado Salad GFF - Gem lettuce, pickled daikon, homemade focaccia Lime and coriander yogurt dres</li>
                        <li>Vegetarian Curry GFF - Cauliflower, squash, chickpeas, basmati, Grilled Naan, raita</li>
                      </ul>
                      <h2 style="text-align: center;">Sample Dinner Menu:</h2>
                      <h3 style="text-align: center;">Main Menu:</h3><br>
                      <ul>
                        <li>Braised Lamb Shank GF - Herb mash, seasonal vegetables, rosemary jus</li>
                        <li>Duck Breast - Duck confit, scallion and parmesan croquette, Asparagus, roasted tomatoes, thyme jus</li>
                        <li>Crisp Half Chicken GF - Chorizo and Manchego polenta, asparagus,Tomato puree</li>
                        <li>Pan Seared Shrimps GF - Sweet pea and fennel risotto, seedling salad</li>
                      </ul>
                       <h3 style="text-align: center;">Desserts:</h3><br>
                       <ul>
                         <li>Chocolate Torte - Mango ice, fresh berries</li>
                         <li>Crème Brûlée GFF - Almond, cranberry and chocolate biscotti</li>
                         <li>Homemade Pie - Fresh cream or ice cream</li>
                         <li>Sticky Toffee Pudding - Whisky walnut ice cream, caramel sauce</li>
                         <li>White Chocolate Caramel Cheesecake - Biscotti crust, oat crisp</li>
                       </ul>
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
         var imgs=["hotel49.jpg", "hotel50.jpg","hotel51.jpg","hotel52.jpg"];
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