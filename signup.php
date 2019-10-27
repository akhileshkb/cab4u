<!-- <html>
<head>
	<title>sign up page</title>
</head>
<body>
	<form action="signup_b.php" method="post" enctype="multipart/form-data">
	username<input type="text" name="username"><br><br>
	Name <input type="text" name="name"><br><br>
	password<input type="password" name="password"><br><br>
	
	<input type="submit" value="check for username" name="">
</body> -->
<?php
	echo "<form action='signup_b.php' method='post' enctype='multipart/form-data'>";
	echo "Username: <input type='text' name='username' id='username'><br><br>";
	echo "name: <input type='text' name='name' id='name'><br><br>";
	echo "Password: <input type='password' name='password' id='password'><br><br><br>";
	echo "<input type='submit' name='submit' value= 'sign up'></form>";
?>