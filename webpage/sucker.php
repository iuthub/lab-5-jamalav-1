<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>


	<body>
		<?php  
		if(isset($_REQUEST["name"])&&isset($_REQUEST["section"])&&isset($_REQUEST["Creditnumber"])&&isset($_REQUEST["CreditCard"])&&($_REQUEST["name"]!="")&&($_REQUEST["Creditnumber"]!=""))
		{
		?>
		<h1>Thanks, sucker!</h1>
		<?php
			 $name= $_REQUEST["name"];
			  $section = $_REQUEST["section"];
			   $Creditnumber= $_REQUEST["Creditnumber"];
			   $Credittype=$_REQUEST["CreditCard"];
			   	$myfile = fopen("sucker.txt", "a") or die("Unable to open file!");
			   				fwrite($myfile, $name.";");
							fwrite($myfile, $section.";");
							fwrite($myfile, $Creditnumber.";");
							fwrite($myfile, $Credittype.";");
							fwrite($myfile,PHP_EOL);
							fclose($myfile);
			?>

		<p>Your information has been recorded.</p>

		<dl>
			<dt>Name</dt>
			<dd><?= $name ?></dd>

			<dt>Section</dt>
			<dd><?= $section ?></dd>

			<dt>Credit Card</dt>
			<dd><?= $Creditnumber ?>(<?= $Credittype ?>)</dd>
		</dl>

		<p>here are all the suckers who submitted here</p>
		
			<?php
				foreach (file("sucker.txt") as $line) {
					?>
		<pre><?= $line?></pre>
		<?php
	}
}
else
{
	?>
	<h1>Sorry!</h1>
	<p>You didn't fill out the form completly!<a href="buyagrade.html">TRY AGAIN?</a></p>
	<?php
	
}
	?>
	</body>
</html> 