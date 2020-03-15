<?php
   $db=mysqli_connect("localhost","root","","triplecreek");

   $qry1 = "SELECT * FROM `rtf`";
   $result=mysqli_query($db,$qry1);
?>



<style type="text/css">
	td,th
	{
		border: 1px solid black;
		text-align: center;
	}
</style>

<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Name</th> 
    <th>Email</th>
    <th>Address</th>
    <th>Phone no</th>
    <th>state</th>
    <th>cabins</th>
  </tr>
  <?php
while($row=$result->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $row['ID']; ?></td>
    <td><?php echo $row['Name']; ?></td>
    <td><?php echo $row['Email']; ?></td>
    <td><?php echo $row['Address']; ?></td>
    <td><?php echo $row['Phone no']; ?></td>
    <td><?php echo $row['state']; ?></td>
    <td><?php echo $row['Select Cabins']; ?></td>
  </tr>
<?php
}
?>
</table>
