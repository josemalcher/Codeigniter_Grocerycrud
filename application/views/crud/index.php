<!doctype html>
<html lang="pt_BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>GROCERY TESTE</title>
	<?php
		foreach ($css_files as $css){
			echo "<link rel='stylesheet' href='$css' />";
		}
	?>
</head>
<body>

<?php
	echo $output;
?>

<?php
foreach ($js_files as $js){
	echo "<script src='$js' ></script>";
}
?>
</body>
</html>
