<?php
session_start();
$password = 'XXX';
$url = 'http://www.windeo-planet.com/wordpress/';
if(isset($_POST['password'])) {
	$pwd = $_POST['password'];
	if($pwd == $password) {
		$_SESSION['authenticated'] = "yes";
		$do = "redirect";
	}
	else {
		$do = "incorrect";
	}
}
else{
	$do = "showform";
}

if($do == "showform") {
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Code d\'acces</title>
<style type="text/css">
body {
	font-size:14px;
}
</style>
</head>

<body>
<div align="center" style="margin:100px auto;width:300px;background-color:#000;color:#FFF">		<h2>veuillez saisir le mot de passe</h2>
  <form action="'.$url.'login.php" method="post">
    Mot de passe: <input name="password" type="password" /><br></br>
		<button type="submit">Envoyer</button>&nbsp;&nbsp;
		<button type="reset">Reset</button></form></div>
	</form>
</div>
</body>
</html>';
}

else if($do == "incorrect") {
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Code d\'acces</title>
<style type="text/css">
body {
	font-size:14px;
}
</style>
</head>

<body>
<div align="center" style="margin:100px auto;width:300px;background-color:#000;color:#FFF">		<h2>veuillez saisir le mot de passe</h2>
  <form action="'.$url.'login.php" method="post">
  	<div style="color:red" >Mot de passe incorrect</div>
    Mot de passe: <input name="password" type="password" /><br></br>
		<button type="submit">Envoyer</button>&nbsp;&nbsp;
		<button type="reset">Reset</button>
	</form>
</div>
</body>
</html>';

}
elseif($do == "redirect") 
{
	header("Location: ".$url);
}
?>
