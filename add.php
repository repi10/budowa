<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$svc = mysqli_real_escape_string($mysqli, $_POST['svc']);
	$comment = mysqli_real_escape_string($mysqli, $_POST['comment']);
		
	if(empty($name) || empty($svc) || empty($comment)) {
				
		if(empty($name)) {
			echo "<font color='red'>Imię jest puste.</font><br/>";
		}
		
		if(empty($svc)) {
			echo "<font color='red'>Usługa jest puste.</font><br/>";
		}
		
		if(empty($comment)) {
			echo "<font color='red'>Komentarz jest pusty.</font><br/>";
		}
		
		echo "<br/><a href='javascript:self.history.back();'>Cofnij</a>";
	} else { 
			
		$result = mysqli_query($mysqli, "INSERT INTO users(name,svc,comment) VALUES('$name','$svc','$comment')");
		
		echo "<font color='green'>Dodano!";
		echo "<br/><a href='index.php'>Zobacz</a>";
	}
}
?>
</body>
</html>
