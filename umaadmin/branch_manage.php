<!DOCTYPE html>
	<head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu">
<?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>MANAGE BRANCH</h2></div>
        <div class="fom">
	<table width="100%" height="300">
		<tr>
			<td>S No.</td>
			<td>Branch Name</td>
            <td>Branch Code</td>
            <td>Address</td>
            <td>Contact_Person</td>
            <td>Mobile</td>
            <td>Email</td>
			 <td>Click Here For Delete</td>
		</tr>
<?php
include_once "db.php";
	
	$i = 1;	
	$query = "select * from branch";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
	<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['b_name']; ?></td>	
            <td><?php echo $row['b_code']; ?></td>
			<td><?php echo $row['add']; ?></td>
            <td><?php echo $row['Contact_Person']; ?></td>
            <td><?php echo $row['mob']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><a href="del_branch.php?i=<?php echo $row['b_code']; ?>">Delete</a></td>
		    <td><a href="#?i=<?php echo $row['s_no']; ?>">EDIT RECORD</a></td>
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
