<?php
session_start();
?>

<html>
   <head>
      <meta charset="utf-8">
      <title>Triple Creek</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="style.css">
      <script src="jquery.js"></script>
   </head>
   <body>
      <div class="base-container">
         <div class="container">
            <div class="logo">
               <a><img src="download2.png" alt="Triple Creek" style="margin-top: -90px;margin-bottom: -50px;"></a>
            </div>
            
            
            <?php include("header.php");  ?>


         </div>
         <div class="wrap" role="document" style="margin-top: 0px;">
            <div class="content row">
               <main class="main" role="main">

                  <div><img id="topimg" style="width: 100%;height: 700px;" src=""></div>

                  <div class="vc_row wpb_row vc_row-fluid small-row vc_custom_1431449700604">
                     <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                           <div class="wpb_wrapper">
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <h1 style="text-align: center;">A Triple creek Luxary Resort</h1>
                                    <h3 style="text-align: center;">Hidden Away In Bangus Valley</h3>
                                 </div>
                              </div>
                              <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_center vc_separator_no_text vc_sep_color_grey"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span></div>
                              <div class="wpb_text_column wpb_content_element ">
                                 <div class="wpb_wrapper">
                                    <p class="p1"><span class="s1">Experience the legendary hospitality and enchanting beauty of one of the world’s best hotels set in the heart of the breathtaking Himalayan Mountain Range of the Bankus Valley. A proud member of the prestigious Triple Creek offers an extraordinary, all-inclusive vacation experience of refined rustic elegance paired with an excellent wine list, and warm, welcoming, five star service amidst the romance of a forested mountain retreat.</span></p>
                                    <p class="p2"><span class="s1">Our Triple creek luxary resort accommodations feature a fine selection of private log luxury ranch cabins<b> </b>and splendid ranch homes with easy access to our well-appointed and comfortable lodge. Our lodge and surroundings feature a curated&nbsp;collection of original Western art and the delightful amenities of a luxury ranch resort. </span>Here, adult travelers enjoy a truly romantic setting with incomparable scenery, a wide variety of native wildlife, an almost endless menu of all-inclusive outdoor activities and the option of adding-on some of the finest off-ranch Western adventures in the continental United States.</p>
                                    <p class="p2">Come join us for a wonderful retreat from the everyday and truly relax in our world-class accommodations, dine on the freshest contemporary cuisine and sample the world’s finest wines while our caring staff pampers and cares for you and your every desire.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="fullwidth-image-flip wpb_column vc_column_container vc_col-sm-12">
                     <div class="caption-wrap">
                        <h2>EXPERIENCE LUXURY</h2>
                        <h2>In the Midst of a Great Wilderness</h2>
                     </div>
                  </div>
            </div>
            </main><!-- /.main -->
         </div>
         <!-- /.content -->
      </div>
      <!-- /.wrap -->
      <footer class="content-info" role="contentinfo">
         <div class="container">
            <div class="centered-footer">
               <p><a href="/">Triple Creek</a><br>
                  Bangus Valley<br>Kashmir<br>
                  © 2019 Triple Creek
               </p>
            </div>
         </div>
      </footer>

      <script type="text/javascript">
         var t=0;
         var imgs=["hotel4.jpg","hotel6.jpg", "hotel3.jpg"];
         $("#topimg").attr('src',imgs[t]);
         var slide= () => {
            $("#topimg").attr('src',imgs[(++t)%imgs.length]);
         };
         var inter=setInterval(slide,3000);
       </script>
   </body>
</html>