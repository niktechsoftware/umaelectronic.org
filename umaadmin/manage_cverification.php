<!DOCTYPE html>
    <head> <title>Uma Electronics Institute</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
<body>
<div class="main_body">
	<div class="menu"><?php include "menu.php" ?></div>
    <div class="page_body">
    	<div class="top"><h2>Manage Certificate Verification</h2></div>
        <div class="fom">
		<table width="100%" height="300" style="font-size:13px";>			
		<tr>
            <td>S No.</td> 
			<td>ENROLLMENT</td>
			<td>NAME</td>
		    <td>FATHER'S NAME</td>
			<td>MOTHER'S NAME</td>
            <td>CITY</td>
            <td>CATEGORY*</td>
            <td>C_CODE</td>
             <td>C_NAME_</td>
            <td>DIVISION</td>
             <td>IMAGE</td>
            <td>COURSE*</td>
            <td>GENDER*</td>
            <td>DELETE</td>
		</tr>
     <?php
	include_once "db.php";
	
	$i = 1;	
	$query = "select * from c_varification";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result))
	{
?>
		<tr>
            <td><?php echo $i; ?></td>
			<td><?php echo $row['enrollment']; ?></td>	
            <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['mname']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['cat']; ?></td>
            <td><?php echo $row['center_code']; ?></td>
            <td><?php echo $row['study_center']; ?></td>
            <td><?php echo $row['grade']; ?></td>
            <td><?php echo $row['image']; ?></td>
            <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['gender']; ?></td>
           </td>
			<td><a href="veridel.php?i=<?php echo $row['enrollment']; ?>">Delete</a></td>
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