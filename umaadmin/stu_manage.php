<!DOCTYPE html>
	<head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
	</head>
<body>
<div class="main_body">
	<div class="menu">
<?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>MANAGE GALLERY</h2></div>
        <div class="fom">
	<table width="100%" height="300">
		<tr>
			<td>S No.</td>
			<td>Name</td>
			 <td>Click Here For Delete</td>
		</tr>
<?php
include_once "db.php";
	
	$i = 1;	
	$query = "select * from sel_student";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
	
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['stu_name']; ?></td>
		    <td><a href="delete.php?i=<?php echo $row['s_no']; ?>">Delete</a></td>
            <td><a href="update.php?i=<?php echo $row['s_no']; ?>">EDIT RECORD</a></td>
							
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
