<?php
$color='white';
if (isset($_COOKIE['color'])){
	$color=$_POST['color'];
}
setcookie('color',$color,time()+3600);
?>
<style>
	body{
		background:<?php echo $_COOKIE['color']; ?>;
	}
</style>
<form action="index.php" method="post">
    <p><input name="color" type="radio" value="red">RED</p>
    <p><input name="color" type="radio" value="blue">BLUE</p>
    <p><input name="color" type="radio" checked="checked" value="green">GREEN</p>
    <p><input type="submit" value="Choose yor color"></p>
</form>