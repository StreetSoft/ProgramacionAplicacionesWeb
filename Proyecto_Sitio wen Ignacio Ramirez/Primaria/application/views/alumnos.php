<!DOCTYPE html>
<html lang="en">
<head>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
	 	foreach ($css_files as $file) {
	?>
		<link rel="stylesheet" type="text/css" href="<?=$file;?>">
	<?php } ?>
</head>
<body>
	<?=$output;?>

	<?php
		foreach ($js_files as $file){
	?>
		<script type="text/javascript" src="<?=$file;?>"></script>
	<?php } ?>
</body>
</html>