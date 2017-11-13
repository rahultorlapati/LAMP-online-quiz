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

input[type=password], select {
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
input[type=button] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 45px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button]:hover {
    background-color: #45a049;


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
        <title>Login Page</title>
    </head>
    <body>
        <form action="" method="post">
        <h1><center>Login<center></h1>
        <tr>
            <td>
                <?php 
$uname=$_POST['uname'];
$pass=$_POST['pass'];
            if(!empty($uname)&&!empty($pass)){
                            $servername = "localhost";
                            $username = "root";
                            $password = "0000";
                            $dbname = "users";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if(!$conn)
                            {
                                die("connection failed:".mysqli_connect_error());
                            }
                            
                            $query = "SELECT uname, pass from user";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) 
                            {
                                while($row = mysqli_fetch_assoc($result)) 
                                    {
                                        $usern=$row["uname"];
                                        $passw=$row["pass"];
                                        if($uname===$usern && $pass===$passw)
                                        {   
                        $conn->close();
                                            header("Location: main.html");
                                        }
                                    }
                            }
            
                            $msg="Wrong Username or Password";

                            $conn->close(); 
            }
            
                    ?> 

                
                        <h1><input type="text" name="uname" placeholder="Username" value="" style="height: 50px; width:85%;"></h1>
                        <h1><input type="password" name="pass" placeholder="Password" value="" style="height: 50px; width:85%;"></h1>
                        <center><?php echo("$msg") ?></center>
            <input type="submit" value="Log In" style="width: 85%" readonly>
                        <input type="button" value="Register" style="width: 85%" onclick="window.location.href='register.php'" readonly>
                                              
                        
                        
                </td>
        </tr>
    </form>
    </body>
</div>
    </html>


 
