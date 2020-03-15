<?php
session_start();
   $db=mysqli_connect("localhost","root","","triplecreek");

	$userid = $_SESSION['userid'];
    $qry = "SELECT * FROM `login` WHERE ID='$userid'";
    $usr = mysqli_fetch_assoc(mysqli_query($db, $qry));
   
   if (isset($_GET['cancel']))
   {
    $bid = $_GET['ID'];
   	$qry = "DELETE FROM `rtf` WHERE ID='$bid'";
   	mysqli_query($db, $qry);

   	header("Location:paymentview.php");
   }
   elseif (isset($_GET['bid']))
   {
   	   $bid = $_GET['bid'];
   	   $qry = "SELECT * FROM `rtf` WHERE ID='$bid'";
	   $res = mysqli_fetch_assoc(mysqli_query($db, $qry));

	   $qry = "SELECT * FROM `managers` WHERE rid='$bid'";
	   $status = mysqli_fetch_assoc(mysqli_query($db, $qry));
   }
   else
   {
	   $datetime = $_GET['datetime'];
	   $userid = $_SESSION['userid'];

	   $qry = "SELECT * FROM `rtf` WHERE userid='$userid' and booktime='$datetime'";
	   $res = mysqli_fetch_assoc(mysqli_query($db, $qry));

	   $bid = $res['ID'];

	   $qry = "SELECT * FROM `managers` WHERE rid='$bid'";
	   $status = mysqli_fetch_assoc(mysqli_query($db, $qry));
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="sty.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	<style type="text/css">
		.data
		{
			margin-bottom: 12px;
		}
	</style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex"></div>
          <div class="card-body">
            <h5 class="card-title text-center">Booking</h5>
    		<div class="row data">
	    		<div class="col-sm-4">Booking id : </div>
	    		<div class="col-sm-8"><?php echo $res['ID']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Booking Date : </div>
	    		<div class="col-sm-8"><?php echo $res['booktime']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Name : </div>
	    		<div class="col-sm-8"><?php echo $usr['name']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Email : </div>
	    		<div class="col-sm-8"><?php echo $usr['email']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Address : </div>
	    		<div class="col-sm-8"><?php echo $res['Address']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Phone no : </div>
	    		<div class="col-sm-8"><?php echo $res['Phone no']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">State : </div>
	    		<div class="col-sm-8"><?php echo $res['state']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Check in : </div>
	    		<div class="col-sm-8"><?php echo $res['cin']; ?></div>
    		</div>
    		<div class="row data">
	    		<div class="col-sm-4">Check out : </div>
	    		<div class="col-sm-8"><?php echo $res['cout']; ?></div>
    		</div>
    		<div class="row data">
                <div class="col-sm-4">Status : </div>
                <div class="col-sm-8"><?php echo $status['status']; ?></div>
              </div>
    		<div class="row data">
	    		<div class="col-sm-4"></div>
	    		<div class="col-sm-8">
	    			<!-- <form>
		    			<input type="text" name="email" value="<?php #echo $row['email']; ?>" style="display: none;">
		    			<input type="text" name="datetime" value="<?php #echo $row['datetime']; ?>" style="display: none;">
	    				<input type="submit" name="cancel">
	    			</form> -->
	    			<button onclick="window.location.href='payment.php?cancel=true&ID=<?php echo $res['ID']; ?>'">Cancel</button>
	    		</div>
    		</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>