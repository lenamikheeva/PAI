<?php
session_start();
include("tekst.html");
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	</head>

	<body style="background-color: <?=$_POST['kolor-tla'] ?>; font-family: <?=$_POST['kroj-czcionki'] ?>;font-size: <?=$_POST['wielkosc-czcionki'] ?>px "> 
	</body>
</html>