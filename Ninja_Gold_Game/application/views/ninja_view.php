<?php 
date_default_timezone_set('America/Seattle');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gold Ninja</title>
	<link rel="stylesheet" href="assets/ninja_gold.css">
</head>
<body>
	<div id="wrapper">
		<span><h2>Your Gold:<div id="gold"><?= $this->session->userdata('gold')?> Gold</div> </h2>
		<h2 id="goldcount"><?= $this->session->userdata('')?>
			
		</h2>
		</span>
		
		<div class="div">
			<form action="<?=base_url('/index.php/ninja_gold/process')?>s" method="post">
				<h2>Farm</h2>
				<h3>(earn 10-20 gold)</h3>
				<input type="hidden" name="building" value="farm">
				<input class="goldButton" type="submit" value="Find Gold!">
			</form>
		</div>

		<div class="div">
			<form action="<?=base_url('/index.php/ninja_gold/process')?>" method="post">
				<h2>Cave</h2>
				<h3>(earn 5-10 gold)</h3>
				<input type="hidden" name="building" value="farm">
				<input class="goldButton" type="submit" value="Find Gold!">
			</form>
		</div>

		<div class="div">
			<form action="<?=base_url('/index.php/ninja_gold/process')?>" method="post">
				<h2>House</h2>
				<h3>(earn 2-5 gold)</h3>
				<input type="hidden" name="building" value="farm">
				<input class="goldButton" type="submit" value="Find Gold!">
			</form>
		</div>

		<div class="div">
			<form action="<?=base_url('/index.php/ninja_gold/process')?>" method="post">
				<h2>Casino</h2>
				<h3>(earn 0-50 gold)</h3>
				<input type="hidden" name="building" value="farm">
				<input class="goldButton" type="submit" value="Find Gold!">
			</form>
		</div>
		<h2>Activities:</h2>
		<div id="activities">
			<?php if(!empty($messages)){
					foreach (array_reverse($messages)as $messages) {
						echo $messages.'<br>';
					}
				}?>
		</div>
		<form action="<?=base_url('/index.php/ninja_gold/process')?>" method="post">
			<input type="hidden" name="reset" value = "reset">
			<input class="submit"type="submit" name="reset" value="start over!">
		</form>
	</div>
</body>
</html>