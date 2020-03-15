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
<div><img id="topimg" style="width: 100%;height: 800px;" src="hotel56.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%,0);">
                    <h2 style="text-align: center;">All-Inclusive Activities</h2>
                     <h3 style="text-align: center;">ENJOY A WIDE VARIETY OF ACTIVITIES WITH YOUR RATEs</h3>
                     <p>Fill your day with on-ranch activities such as horseback riding, hiking or snowshoeing, a fly-casting clinic, archery, sapphire panning, a game of tennis, or simply relax by the pool, all of which is included in your nightly cabin rate.  No two vacations are alike and, at Triple Creek, the endless variety of activities and relaxing pursuits ensure that you’ll enjoy a vacation of your own design.</p>
                     <p>We are also happy to help you plan an off-ranch Western Adventure (additional fees apply) of guided fly-fishing, scenic river floating, driving cattle to greener pasture, whitewater rafting, mountain biking, or guided all-terrain vehicle tours.</p>
                     <h2 style="text-align: center;">Horseback Riding</h2>
                     <p>What better way to explore the beauty of the western countryside than on horseback? Over wildflower meadows in spring … under blue mountain skies during the summer … through the richly scented needles of a Ponderosa pine forest in fall … or across a trail of freshly fallen snow — horseback riding at Triple Creek is a year-round activity. Along the way you may see white tail deer, mule deer, elk, wild turkeys, and an occasional bald eagle. Rides that originate on the ranch are included in your stay, and an experienced guide accompanies all horseback trips. Trail ride group sizes are kept small, to allow for optimal personal attention and are tailored to participants’ level of abilities and interest.</p>
                     <p>Horseback rides are offered daily at 9:00am, 10:00am, 1:30pm and 3:00pm, and run for approximately 75 minutes. For a little more time in the saddle there is also a daily Lunch Ride from 11:30am – 2:00pm ~ enjoy your pack lunch trailside!</p>
                     <p>Because of the mountainous terrain of our area our horses are guided at a leisurely walk, and for the safety of our guests and horses we do not accept riders over 250 lbs. Riders are asked to wear long pants and bring a long sleeve shirt or jacket. Tennis shoes are acceptable in warmer months. In winter, lined boots are recommended.</p>
                     <h2 style="text-align: center;">Fly Fishing</h2>
                     <p>How do you catch a fish on a fly? Find out in our Fly Casting Clinics where a professional ORVIS guide will teach special knots for tying your fly; casting the line; setting the hook and how to bring in your catch. After your lesson, you are ready to fish one of our stocked trout ponds. The kitchen will be delighted to cook up your catch for lunch or dinner! Complimentary ORVIS Fly Fishing equipment is available from the Activity Center in the Main Lodge.</p>
                     <p>Triple Creek also has stocked trout ponds. One is located above the Lodge and another larger pond is in the pasture along the West Fork Road. These are catch and eat ponds.</p>
                      <h2 style="text-align: center;">Disc-Golf</h2>
                      <p>Introduced in Summer, this 9-hole frisbee golf course is part of our continually expanding complimentary activity program. The course meanders through the forest and offers a pleasant way to explore the ranch. Disc sets and score sheets are available at the Activity Center in the Main Lodge.</p>
                      <h2 style="text-align: center;">Lawn Games</h2>
                      <p>While playing a game of Tennis enjoy a breathtaking view of the West Valley beyond and below the court. Complimentary rackets and balls are available from the lodge.</p>
                      <p>Enjoy a game of Bocce Ball or Badminton on the lawn next to the pool and fitness center. Simply ask an Activity Coordinator for details on set up.</p>
                      <h2 style="text-align: center;">Archery</h2>
                      <p>Archers may test their skill and accuracy while participating in a memorable activity that evokes images of the history and lore of Montana’s colorful past. The Triple Creek Range consists of several stands positioned at various distances from the targets and all equipment is provided. Guidance and coaching from our Activities Staff will teach proper firing technique as well as range safety to all skill levels – arrive an archer and leave a ‘toxophilite’, one who is fond of or an expert at archery. Please speak with an Activities Coordinator to book your day and time.</p>
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
         var imgs=["hotel56.jpg","hotel57.jpg", "hotel58.jpg","hotel59.jpg","hotel60.jpg"];
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

