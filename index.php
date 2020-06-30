<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing Captcha</title>
</head>
<body style="background-color:powderblue;">

	<h1>Simple Captcha</h1>

<h2>Testing Numeric Captcha Generator</h2>
	<p>

		<?php
			if(isset($_POST['captcha']) && isset($_SESSION['captcha']))
			{
				echo "POST : ".$_POST['captcha'];
				echo "<br/>SESSION : ".$_SESSION['captcha'];

				if($_POST['captcha'] == $_SESSION['captcha'])
				echo "<br/>COMPARISON: Challenge Correct";
				else
				echo "<br/>COMPARISON: Challenge Wrong";
			}

		?>		
		<div>
		  	<div>
			    <span><img src="./src/generate_numeric_captcha.php"></span>
		  	</div>			
			<form action="index.php" method="post">
			  <input type="text" name="captcha" placeholder="Enter Captcha" id="captcha" autocomplete="off" >
			  <input type="submit">

			</form>
		</div>

	</p>
<h2>Testing Alphanumeric Captcha Generator</h2>
<p>
	<?php
		if(isset($_POST['captcha2']) && isset($_SESSION['captcha2']))
		{
			echo "POST : ".$_POST['captcha2'];
			echo "<br/>SESSION : ".$_SESSION['captcha2'];

			if($_POST['captcha2'] == $_SESSION['captcha2'])
			echo "<br/>COMPARISON: Challenge Correct";
			else
			echo "<br/>COMPARISON: Challenge Wrong";
		}

	?>	
	<div>
	  	<div>
		    <span><img src="./src/generate_alphanumeric_captcha.php"></span>
	  	</div>		
		<form action="index.php" method="post">
		  <input type="text" name="captcha2" placeholder="Enter Captcha" id="captcha2" autocomplete="off" >
		  <input type="submit">

		</form>
	</div>

</p>	

</body>
</html>




