<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Survey Form</title>
	<link rel="stylesheet" href="assets/survey_form.css">
</head>
<body>
	<div id="wrapper">
		<h2>Well come to Survey Form</h2>
		<form id = "form" action="/surveys/process_form/" method="POST">
			<div class="div">
				<label for="name">Your Name</label>
				<input type="text" name="name" placeholder = "name">
			</div>
			<div class="div">
				<label for="location">Dojo Location</label>
				<select name="location" id="">
					<option value="Mountine View,wa">Mountine View</option> 
					<option value="Bellevue,wa">Bellevue</option> 
					<option value="San Francisco,ca">San Francisco</option>
				</select> 
			</div>
			<div class="div">
				<label for="Language">Favorite Language</label>
				<select name="language" id="">
					<option value="Javascript">Javascript</option> 
					<option value="Java">Java</option> 
					<option value="C++">C++</option>
				</select> 
			</div>
			<div class="div">
				<label for="comment">Comment</label>
				<textarea name="comment" id="" cols="30" rows="10" placeholder="comment"></textarea>
			</div>
				<input id="submit"type="submit" value="submit">
		</form>	
	</div>
</body>
</html>