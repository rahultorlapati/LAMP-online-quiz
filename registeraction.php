
<!DOCTYPE html>
<html>
<style>
body {
    font-family: Verdana, Arial, sans-serif;
    font-size: smaller;
    padding: 50px;
    color: #be7429;
}
input[type=text], select {
    width: 100%;
    padding: 12px 10px;
    margin: 10px 45px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 45px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
div {
    margin: 50px 250px;
    height: 400px;
    width: 50%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<div>
    <head>
    <body background="bgimg.jpg">         
        <title>Registar Response</title>
    </head>
    <body>
        <form action="login.php" method="post">
        <tr>
            <td>
<?php 
$uname=$_POST['uname'];
$pass=$_POST['pass'];
	if(empty($uname)||empty($pass))
	{
	$msg="Enter Username or Password";
	}
	else
	{
	$servername = "localhost";
	$username = "root";
	$password = "0000";
	$dbname = "users";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if($conn->connect_error)
	{
	die("connection failed:".$conn->connect_error);
	}
	$sql = "INSERT INTO user (uname, pass) VALUES ('$uname', '$pass')";
	if ($conn->query($sql) === TRUE) 
		{
			$msg="User successfully registered.";
		}
	else
		{
			$msg="Error in registering user: " . $sql . "<br>" . $conn->error;
		}
	}

$conn->close();

?> 
                

			<h1><center><?php echo("$msg") ?></center></h1>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
                        <input type="submit" value="Login Now" onclick="window.location.href='register.php'" style="width: 85%" >
                                              
                        
                        
                </td>
        </tr>
    </form>
    </body>
</div>
    </html>
