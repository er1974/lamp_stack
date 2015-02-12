<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/random.css">
</head>
<body>
	<form action="<?=base_url('random_word/random')?>" method="post">
		<h2>Random Word Generator(Attempt #<?= $count?>)</h2>
		<h1><?= $string?></h1>
		<input id= "submit" type="submit" value="Generate!">
	</form>
</body>
</html>