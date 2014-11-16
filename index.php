<h1>Text to Binary Converter <sup><small>by: Jake</small></sup></h1>

<form action="convert.php" method="POST">
	<textarea name="user_input" cols="30" rows="10"><?php if(isset($_POST['user_input'])&&!empty($_POST['user_input'])) echo $user_input; ?></textarea><br><br>
	<input type="submit" value="CONVERT">
</form>