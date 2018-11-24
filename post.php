<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<form method="POST">
			Username: <input type="text" name="username" value=""/> <br/>
			Password: <input type="password" name="password" value=""/> <br/>
			<input type="submit" name="form_click" value="Send Data"/> <br/>
			
		<?php
			if(isset($_POST['form_click'])){
				echo "User name:" . $_POST['username'];
				echo '<br/>';
				echo "Password: " . $_POST['password'];
			}
		?>
		</form>
	</body>
</html>