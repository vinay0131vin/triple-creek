<?php
session_start();
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$userid = $_SESSION['userid'];
if (isset($_POST['submit']))
{

$db=mysqli_connect("localhost","root","","triplecreek");
   $qry = "SELECT NOW() as d";
   $datetime = mysqli_fetch_assoc(mysqli_query($db,$qry));
   $datetime = $datetime['d'];

   $username = $_SESSION['username'];
   $address = mysqli_real_escape_string($db,$_POST['address']);
   $phoneno = mysqli_real_escape_string($db,$_POST['phoneno']);
   $state = mysqli_real_escape_string($db,$_POST['state']);
   $cabins = mysqli_real_escape_string($db,$_POST['cabins']);
   $cin = $_POST['cin'];
   $cout = $_POST['cout'];
   if (($cin > $datetime) && ($cout > $datetime))
   {
     $qry = "INSERT INTO `rtf`(`userid`, `Address`, `Phone no`, `booktime`, `state`, `Select Cabins`, `cin`, `cout`) VALUES ('$userid','$address','$phoneno', '$datetime','$state','$cabins', '$cin', '$cout')";
     $res = mysqli_query($db,$qry);

       $qry = "SELECT * FROM `rtf` WHERE userid='$userid' and booktime='$datetime'";
       $res = mysqli_fetch_assoc(mysqli_query($db, $qry));
       $rid = $res['ID'];
      $qry = "INSERT INTO `managers`(`rid`, `status`) VALUES ('$rid', 'pending')";
      mysqli_query($db, $qry);

     header("Location:payment.php?datetime=".$datetime);
   }
   else
   {
    ?><script type="text/javascript">alert("Date/Time before <?php echo $datetime; ?> is not accepted.");</script><?php
   }
}
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
   </head>
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

                  <div><img id="topimg" style="width: 100%;height: 700px;" src="hotel9.jpg"></div>
                  <div class="rfr_form"></div>
                  <div class="container" style="width: 900px;left: -50%; transform: translate(40%, 0);">
  <h2 style="text-align: center;">Request For Reservation</h2>
  <p>Thank you for your interest in Triple Creek Ranch. Our Reservation Team is available to assist you seven days a week. The best time to reach us is between 7:30am and 11:00pm, Mountain Standard Time.</p>
  <p>To request a reservation online, please complete the request form below and submit. A Triple Creek Ranch representative will contact you shortly to discuss cabin availability and to finalize the details of your stay before confirming your reservation.</p>
  <p>Please Note: Submitting a Reservation Request alone does not result in a confirmed reservation. A Triple Creek Representative must contact you to confirm.</p>
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php echo $name; ?>" disabled>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" disabled>
    </div>
<div class="form-group">
      <label for="address">Address:</label>
      <input type="address" class="form-control" id="address" placeholder="Enter address" name="address" required="">
    </div>
    <div class="form-group">
      <label for="phoneno">Phone no:</label>
      <input type="phoneno" class="form-control" id="phoneno" placeholder="Enter phone no" name="phoneno" maxlength="10" minlength="10" required="">
    </div>
    <div class="form-group">
      <label for="state">State:</label>
      <input type="text" class="form-control" id="state" placeholder="Enter state" name="state" required="">
    </div>
    <div class="form-group">
      <label for="state">Check in : </label>
      <input type="datetime-local" class="form-control" id="cin" name="cin" required="">
    </div>
    <div class="form-group">
      <label for="state">Check out : </label>
      <input type="datetime-local" class="form-control" id="cout" name="cout" required="">
    </div>

  <select name="cabins">
    <option value="One Bed Cabins">One Bed Cabins</option>
    <option value="Two Bed Luxary">Two Bed Luxary</option>
    <option value="Three Bed Luxary">Three Bed Luxary</option>
  </select>


    <input type="submit" name="submit" class="rfr_submit btn btn-default">
    <?php
    if (isset($_POST['submit']))
    {
      ?><div class="alert alert-primary" role="alert">Thank You For Booking In Triple Creek.Get Prepared To Blow!</div><?php
    }
    ?>
  </form>
</div>

   </body>
</html>