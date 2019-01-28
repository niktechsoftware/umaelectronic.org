<?php
include_once 'db.php';

$title = $_POST['title'];
$detail = $_POST['detail'];
$file = $_FILES['img'];
$dt = $_POST['dt'];
$url = $_POST['url'];


$t = mysql_query("INSERT INTO news(title,detail,image,post_date,url) VALUES('$title','$detail','$file[name]','$dt','$url')");


if($t)
{
	move_uploaded_file($file["tmp_name"],"./news_image/" . $file["name"]);
header("Location:post_news.php?i=1");

}
else
{
	header("Location:post_news.php?i=2");

	}

?>