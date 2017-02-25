<!DOCTYPE html>
<html>
<head>
	<title>ISSC Tour Guide</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
	
<?php
$url = 'images/Tour5.jpg';
?>
	
<html>
	<head>
		<style type="text/css">

			{
				background-image:url('<?php echo $url ?>');
			}
		</style>
	</head>
	
<body>
	<table>
		<tr>
			<td style='width: 30%;'>
				/** <img class = 'newappIcon' src='images/Tour5.jpg'>	**/
			</td>
			<td>
				<h1 id = "message"><?php echo "Welcome to ISSC Tour Guide"; ?></h1>
				<p class='description'></p> We will help you <span class="blue">make your tour beautiful!</span>.
			</td>
		</tr>
	</table>
</body>
</html>
