<?php
	require_once 'my.php';
    $conn = new mysqli($db_hostname, $db_user, $db_password, $db_database);
    if($conn->connect_error)
    	die ("fatal Error");
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    // echo $username."\n";
    // echo $name."\n";
    // echo $username."\n";
    $query = "SELECT * FROM driver WHERE username='$username'";
    $result = $conn->query($query);
    if (!$result) die ("Database access failed");
    $rows = $result->num_rows;
    if($rows==0)
    {
    	$query = "INSERT INTO driver (username,name,password) VALUES"."('$name','$username','$password')";
        $result = $conn->query($query);
        // echo "hi it is working";
	// for main web page redirection 
        include 'signup.php';
    }
	if ($rows>0) 
	{
		// echo "hi it is working2";
        echo '<script>alert("username is already in used. Please try to use another one")</script>';
		include 'signup.php';
	}

?>