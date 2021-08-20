<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
include 'head.php';
?>
<title>Transfer Money</title>
</head>
<body>
<?php
include 'header.php';
?>
<div class="text">
   <h1>Transfer Money</h1>
</div>
<table>
   <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>BALANCE</th>
      <th>OPERATION</th>
   </tr>
        
   <?php 
      $sql = "select * from customers";
      $result = mysqli_query($conn,$sql);
      while($rows=mysqli_fetch_assoc($result)) {
   ?>
   <tr>
      <td><?php echo $rows['id'];?></td>
      <td class="name"><?php echo $rows['name'];?></td>
      <td><?php echo $rows['email'];?></td>
      <td><i class="fas fa-rupee-sign"></i><?php echo $rows['balance'];?></td>
      <td><a id="transferbutton" href="selectedcustomerdetail.php?id= <?php echo $rows['id'] ;?>">Transfer</a></td> 
   </tr>
   <?php
      }
   ?>
</table>
<?php 
include 'script.php';
?>
</body>
</html>