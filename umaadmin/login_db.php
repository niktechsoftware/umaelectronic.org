<?php 

include_once"db.php";
$uname = trim($_POST['uid']);
$pass = trim($_POST['pass']);
$q="select * from login_tab where ad_name='$uname' and ad_pass='$pass'";
$s=mysql_query($q);
$n=mysql_num_rows($s);
if($n>0)
 {
header("location:student_reg.php");
} else {
header("location:index.php?i=1");
}
