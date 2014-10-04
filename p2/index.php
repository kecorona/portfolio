<?php
require 'logic.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Generator</title>

	 <link rel="stylesheet" href="css/app.css" />

        <link rel="stylesheet" type="text/css" href="css/uikit.css">
        <link rel="stylesheet" type="text/css" href="css/uikit.min.css">
        <link rel="stylesheet" type="text/css" href="css/uikit.gradient.css">
        <link rel="stylesheet" type="text/css" href="css/uikit.gradient.css">

        <link href='http://fonts.googleapis.com/css?family=Varela+Round|Montserrat' rel='stylesheet' type='text/css'>

        <script src="js/jquery.js"></script>
        <script src="js/uikit.js"></script>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
</head>

<body>
	<nav role="navigation">
		
	</nav>


		<div class="uk-container uk-margin-top" id="content" data-uk-grid-margin>

			<form class="uk-form" method="post" action="./">
				<fieldset>
					<h1>X KC D Style Password Generator</h1>

					<fieldset>
						<legend>Words</legend>

						<label for="word_count">Number of words:</label>
						<select name="word_count" id="word_count">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" selected="selected">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
						</select>
						</fieldset>

						<br>


						<div class="uk-row">
							<div class="col-xs-6 col-md-4">
								<legend><h3>Characters:</h3></legend>
								<div class="checkbox">
								  <span><input type="checkbox" name="lowercase" value="lowercase">lowercase</span>
								  <span><input type="checkbox" name="uppercase" value="uppercase">uppercase</span>
								  <span><input type="checkbox" name="numeric" value="numeric">numeric</span>
								  <span><input type="checkbox" name="special" value="special">special characters</span>
							  </div>
						  </div>
					  </div>

						
						<br>

						
					</fieldset>

						<div class="container">
							<input type="submit" id="gen_password" name="gen_password" value="Generate Password">

							<input type="hidden" id="iHateIE" name="iHateIE" value="1412289092666">
						</div>

						<div class="container" id="password_container">
							<span id="password_label"></span>
							<span id="password_display">
								<?php echo "$password" ?>					
							</span>
						</div>
				</fieldset>
			</form>
		</div>




</body>
</html>