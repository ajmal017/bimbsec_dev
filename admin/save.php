<?php
	include '../connect.php';
	$themecolor			= $_POST['theme-color'];
	$accentcolor		= $_POST['accent-color'];
	$themelinkcolor		= $_POST['theme-link-color'];
	$accentlinkcolor	= $_POST['accent-link-color'];

	$sql = 'UPDATE settings SET value = "'.$themecolor.'" WHERE parameter = "theme-color"';
	$run = $conn->query($sql);

	$sql = 'UPDATE settings SET value = "'.$accentcolor.'" WHERE parameter = "accent-color"';
	$run = $conn->query($sql);

	$sql = 'UPDATE settings SET value = "'.$themelinkcolor.'" WHERE parameter = "theme-link-color"';
	$run = $conn->query($sql);

	$sql = 'UPDATE settings SET value = "'.$accentlinkcolor.'" WHERE parameter = "accent-link-color"';
	$run = $conn->query($sql);

	$conn->close();

	header('Location: '.$_SERVER['HTTP_REFERER']);


?>