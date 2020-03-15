<div class="header-reservation-box">
   <?php
      if (isset($_SESSION['book']))
      { 
   ?>
   <a href="paymentview.php" class="header-reservation-request">Bookings</a>
   <a href="logout.php" class="header-reservation-request">Logout</a>
   <?php } else { ?>
   <a href="login.php" class="header-reservation-request">Login</a>
   <a href="register.php" class="header-reservation-request">Register</a>
   
<?php } ?>
</div>
<nav class="menu" role="navigation">
               <div class="nav-pill nav-pill-open"></div>
               <ul id="menu-primary-navigation" class="main-nav" style="">
                  <li class="dropdown menu-accommodations">
                     <a class="" data-toggle="dropdown" href="">Accommodations</a>
                     <ul class="dropdown-menu">
                        <li class="menu-explore-accommodations"><a href="accomadation.php">Explore Accommodations</a></li>
                        <li class="dropdown menu-one-bedroom-cabins"><a href="onebed.php">One-Bedroom Cabins</a></li>
                        <li class="menu-two-bedroom-luxury"><a href="twobed.php">Two-Bedroom Luxury</a></li>
                        <li class="menu-three-bedroom-luxury"><a href="threebed.php">Three-Bedroom Luxury</a></li>
                        <li class="menu-request-a-reservation"><a href="rfr.php">Request A Reservation</a></li>
                     </ul>
                  </li>
                  <li class="dropdown menu-ranch-overview">
                     <a class="" data-toggle="dropdown" href="">Creek Overview <b class=""></b></a>
                     <ul class="dropdown-menu">
                        <li class="menu-bangus"><a href="bangus.php">Bangus Valley</a></li>
                        <li class="menu-places"><a href="places.php">Tourist Places</a></li>
                        <li class="menu-western-art-collection"><a href="western.php">Western Art Collection</a></li>
                     </ul>
                  </li>
                  <li class="dropdown menu-cuisine">
                     <a class="" data-toggle="dropdown" href="">Cuisine<b class=""></b></a>
                     <ul class="dropdown-menu">
                        <li class="menu-overview"><a href="cuisine.php">Overview</a></li>
                        <li class="menu-sample-menus"><a href="sample.php">Sample Menus</a></li>
                        <li class="menu-chefs-table"><a href="chef.php">Chef’s Table</a></li>
                     </ul>
                  </li>
                  <li class="dropdown menu-activities">
                     <a class="" data-toggle="dropdown" href="">Activities <b class=""></b></a>
                     <ul class="dropdown-menu">
                        <li class="menu-overview"><a href="overview.php">Overview</a></li>
                        <li class="dropdown menu-all-inclusive-activities"><a href="events.php">All-Inclusive Activities</a></li>
                        <li class="dropdown menu-western-adventures"><a href="adventure.php">Western Adventures</a></li>
                        <li class="menu-relaxation"><a href="relax.php">Relaxation</a></li>
                     </ul>
                  </li>
                  <li class="menu-experience"><a href="exp.php">Experience</a></li>
                  <li class="dropdown menu-events">
                     <a class="" data-toggle="dropdown" href="">Events <b class=""></b></a>
                     <ul class="dropdown-menu">
                        <li class="dropdown menu-signature-events"><a href="eve.php">Overview</a></li>
                        <li class="menu-holidays"><a href="eve1.php">Holidays</a></li>
                     </ul>
                  </li>
                  <li class="dropdown menu-about-us"><a class="" data-toggle="dropdown" href="">About Us <b class=""></b></a>
                  <ul class="dropdown-menu">
                  <li class="menu-contact-us"><a href="about.php">Contact Us</a></li>
               </ul>
            </li>
            </nav>