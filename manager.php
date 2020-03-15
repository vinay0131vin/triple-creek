<?php
session_start();
   $db=mysqli_connect("localhost","root","","triplecreek");

     $userid = $_SESSION['userid']; 
     // $qry = "SELECT * FROM `login` WHERE ID='$userid'"; 
     // $usr = mysqli_fetch_assoc(mysqli_query($db, $qry));

     $qry = "SELECT * FROM `rtf` inner join `managers` ON rtf.ID=managers.rid";
     $res = mysqli_query($db, $qry);

     $qry = "SELECT * FROM `login` inner join rtf on login.ID=rtf.userid";
     $usrarr = mysqli_query($db, $qry);

     if (isset($_GET['approve']))
     {
      $id = $_GET['approve'];
      $qry = "UPDATE `managers` SET status='Approved' where rid='$id'";
      mysqli_query($db, $qry);
      header("Location:manager.php");
     }
     if (isset($_GET['reject']))
     {
      $id = $_GET['reject'];
      $qry = "UPDATE `managers` SET status='Rejected' where rid='$id'";
      mysqli_query($db, $qry);

      header("Location:manager.php");
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
      <div class="col-lg-10 col-xl-9 mx-auto" style="margin-bottom: -50px;">
        <div class="card-body">
          <h5 class="card-title text-center">Bookings</h5>
        </div>
      </div>
    </div>
    <?php
    while ($row = mysqli_fetch_assoc($res)) {
      $usr=mysqli_fetch_assoc($usrarr);
    ?>
    <div class="row" >
      <div class="col-lg-10 col-xl-9 mx-auto" style="margin-bottom: -50px;">
        <div class="card card-signin flex-row my-5">
          <div class="card-body div">
              <div class="row data">
                <div class="col-sm-4">Booking id : </div>
                <div class="col-sm-8"><?php echo $row['ID']; ?></div>
              </div>
              <div class="row data">
                <div class="col-sm-4">Name : </div>
                <div class="col-sm-8"><?php echo $usr['name']; ?></div>
              </div>
              <div class="row data">
                <div class="col-sm-4">Booking Date : </div>
                <div class="col-sm-8"><?php echo $row['booktime']; ?></div>
              </div>
              <div class="row data">
                <div class="col-sm-4">Cabin : </div>
                <div class="col-sm-8"><?php echo $row['Select Cabins']; ?></div>
              </div>
              <div class="row data">
                <div class="col-sm-4">Status : </div>
                <div class="col-sm-8"><?php echo $row['status']; ?></div>
              </div>
              <div class="row data">
                <div class="col-sm-4"><button style="margin-left: 190px;" onclick="window.location.href='manager.php?approve=<?php echo $row['ID']; ?>'">Approve</button></div>
                <div class="col-sm-8"><button style="margin-left: 190px;" onclick="window.location.href='manager.php?reject=<?php echo $row['ID']; ?>'">Reject</button></div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <?php } ?>


  </div>
</body>
</html>