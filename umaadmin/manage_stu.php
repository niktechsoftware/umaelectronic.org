<!DOCTYPE html>
    <head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Manage Students</h2></div>
        <div class="fom">
		<table width="100%" height="300">			
		<tr>
			<td>S No.</td>
			<td>Student ID</td>
			<td>Name</td>
			<td>Father Name</td>
			<td>Email-Address</td>
			<td>Course</td>	
            		
			<td>Click For Delete</td>
		</tr>
<?php
	include_once "db.php";
	
	$i = 1;	
	$query = "select * from registration";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['stu_id']; ?></td>	
            <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['course']; ?></td>
			<td><?php echo $row['register_for']; ?></td>
			<td><a href="delete1.php?i=<?php echo $row['stu_id']; ?>">Delete</a></td>
		</tr>
<?php 
$i++;
} ?>
	</table>
		
              </div>
        <div class="foot"> Copyright &copy; 2014 Hwebs Technologies</div>
    </div>
    
</div>						
	</body>
</html>