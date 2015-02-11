<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey_result Page</title>
	<link rel="stylesheet" href="assets/survey_result.css">

</head>
<body>
	<div id="wrapper">
		<div class ="InfoBox">
			<p> Thank you for submiting the form <?= $count?></p>
		</div>
		<div class ="contentBox">
			<p>Your name</p>
			<p class="right"><?= $name?></p>
			<p>Favorite Language</p>
			<p class="right"><?= $language?></p>
			<p>Comments</p>
			<p class="right"><?= $comments?></p>
			<form action="<?=base_url('surveys/index')?>">
				<input id="submit"type="submit" value="Go Back">
			</form>
		</div>
	</div>	
</body>
</html>