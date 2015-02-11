<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Counter Demo</title>
	<style>
		body
			{
			text-align: center;	
			}
		.board
			{
			font-size:24px;
			padding: 20px;
			border: 1px solid silver;
			width: 50px;
			margin: 15px auto;	
			}

	</style>
					
</head>
<body>
	<p>You visted the site
	<div class="board"><?= $counter ?></div>times</p>
	<a href='main/reset'><button>Reset</button></a>
	
</body>
</html>