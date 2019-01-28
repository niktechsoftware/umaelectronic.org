<!DOCTYPE html>
    <head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Manage News</h2></div>
        <div class="fom">						
					
	<table width="100%" height="300">
		<tr>
			<td>S No.</td>
			<td>Title</td>
			<td>Posted Date</td>
			<td>Web Url</td>			
			<td>Click For Delete</td>
		</tr>
<?php
include_once "db.php";
	
	$i = 1;	
	$query = "select * from news";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['title']; ?></td>			
			<td><?php echo $row['post_date']; ?></td>
			<td><?php echo $row['url']; ?></td>
			<td><a href="delete2.php?i=<?php echo $row['s_no']; ?>">Delete</a></td>
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
