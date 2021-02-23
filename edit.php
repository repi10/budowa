<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	} else {	
		$result = mysqli_query($mysqli, "UPDATE users SET name='$name',svc='$svc',comment='$comment' WHERE id=$id");
		
		header("Location: index.php");
	}
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$svc = $res['svc'];
	$comment = $res['comment'];
}
?>
<html>
<head>	
	<title>Edytuj wpis</title>
</head>

<body>
	<a href="index.php">Strona główna</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Imię</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Usługa</td>
				<td><input type="text" name="svc" value="<?php echo $svc;?>"></td>
			</tr>
			<tr> 
				<td>Komentarz</td>
				<td><textarea  name="comment" value="<?php echo $comment;?>"></textarea></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Zmień"></td>
			</tr>
		</table>
	</form>
</body>
</html>
