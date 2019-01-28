<?php include_once("../db.php");
if(isset($_POST['q1']))
{
	$cat = $_POST['q1'];

?>
 <option>-Section-</option>
 <?php $val = mysql_query("select cources from courses where category = '$cat'");
	while($res = mysql_fetch_object($val))
	{ ?>
 <option value="<?php echo $res->cources; ?>"><?php echo $res->cources; ?></option>
    <?php } }?>