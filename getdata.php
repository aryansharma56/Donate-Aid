<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","donate");
if(count($_POST)>0) {
$roll_no=$_POST['req'];
$data = mysqli_query($conn,"SELECT * FROM NGO where City='$roll_no' ");
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Retrive data</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body> 
	<table  style="width:600px; line-height:40px; text-align:center; border:1px;"> 
	<tr> 
		<th colspan="6"><h2>NGOs</h2></th> 
		</tr> 
			  <th> Name </th> 
			  
			  <th> Number</th> 
              <th> Organization </th> 
			   
              <th> City </th>
              <th> Address </th>
              <th> Description </th>
        
			  
		</tr> 
		
		<?php while($rows= mysqli_fetch_assoc($data)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['Name']; ?></td> 
		
		<td><?php echo $rows['Number']; ?></td>
        <td><?php echo $rows['Organization']; ?></td>  
		<td><?php echo $rows['City']; ?></td>
        <td><?php echo $rows['Address']; ?></td> 
        <td><?php echo $rows['Description']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
</html>
