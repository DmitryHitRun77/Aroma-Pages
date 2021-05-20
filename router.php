<?php
$url = explode("/", $_SERVER['REQUEST_URI']);
// for ($i = 0; $i < count($url); $i++) {
// echo $url[$i] . "<hr>";
// }
// if($url[1] == blog) {
//   require_once("blog.php");
// }else if($url[1]==auth){
// 	require_once("login.php");
// }
if($url[1] == auth){
	$content=file_get_contents("pages/login.php");
}else if($url[1] == reg){$content=file_get_contents("pages/register.html");
}else if($url[1] == track){$content=file_get_contents("pages/tracking-order.php");
}else if($url[1] == blog){$content=file_get_contents("pages/blog.php");
}else if($url[1] == singleblog){$content=file_get_contents("pages/single-blog.php");
}
else if($url[1] == users){
	require_once("pages/users/index.html");
}else{$content=file_get_contents("pages/index.php");}
// к странице товаром ведет индекс
if(!empty($content))require_once("template.php");
?>
?>