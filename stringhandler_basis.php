<!DOCTYPE html>
<html lang="nl">
	 <head>
		<meta charset="utf-8">
		<meta name="description" content="scripting GD">
		<meta name="author" content="Ma">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>PHP String handler</title>
	</head>
	 <body>
		 <?php
		 if ( !empty($_GET)) {
				 $input1 =  $_GET['input1']; // input uit html
				 $input2 =  $_GET['input2']; // input uit html
				 $input3 = $input1 . " " . $input2;
			 }
			else{
				 $input1 = ""; //lege string
				 $input2 = ""; //lege string
			 }
			// "schrijf hier de benodigde code"
		  ?>
		<div class="wrapper">
			<form method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				 <legend>Wouter van Dompselaar GD1A</legend>
				 <input type = "text" name = "input1"  placeholder = "string 1"><br>
				 <input type = "text" name = "input2"   placeholder = "string 2">
				 <input type = "submit"  id = "submit" name = "submit" value = "submit">
			 </fieldset>
			</form>
			<hr>
			<?php
					// "schrijf hier de benodigde code"
			?><ul>
					<li class="showSpaces">Ingevoerde string 1:  <?php  echo $input1;  ?> </li>
					<li class="showSpaces">Ingevoerde string 2:  <?php  echo $input2  ?> </li>
					<li class="showSpaces">string 1&2 combined:  <?php  echo $input3;  ?> </li>
					<li class="showSpaces">trim string 1:  <?php  echo trim($input1);  ?> </li>
					<li class="showSpaces">trim string 2:  <?php  echo trim($input2);  ?> </li>
					<li class="showSpaces">all capital string 3:  <?php  echo strtoupper($input3);  ?> </li>
					<li class="showSpaces">lower case string 3:  <?php  echo strtolower($input3);  ?> </li>
					<li class="showSpaces">first letter capital string 3:  <?php  echo ucfirst($input3);  ?> </li>
					<li class="showSpaces">length of string 3:  <?php  echo strlen($input3);  ?> </li>
					<li class="showSpaces">position of PHP in string 3:  <?php  echo strpos($input3,"PHP");  ?> </li>
					<li class="showSpaces">replaces fuck with f*ck string 3:  <?php  echo str_replace("fuck","f*ck",$input3);  ?> </li>

				</ul>
				<hr>
			</div>
	 </body>
</html>
