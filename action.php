
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
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=button] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
}
input[type=button]:hover {
    background-color: #45a049;
}
input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
</style>
<div>
    <head>  
    <body background="bgimg.jpg">         
        <title>Response page</title>
    </head>
    <body>
       <form action="add-questions.html">
        <h1>Your response has been recorded.</h1>
        <tr>
            <td>
                
                Question:<?php $question=$_POST['question']; echo $question;?></br>
                Option A:<?php $optiona=$_POST['optiona']; echo $optiona;?></br>
                Option B:<?php $optionb=$_POST['optionb']; echo $optionb;?></br>
                Option C:<?php $optionc=$_POST['optionc']; echo $optionc;?></br>
                Option D:<?php $optiond=$_POST['optiond']; echo $optiond;?></br>
                Key Option:<?php $keyoption=$_POST['keyoption']; echo $keyoption;?></br>
                
                <?php 
$servername = "localhost";
$username = "root";
$password = "0000";
$dbname = "questions";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error)
{
die("connection failed:".$conn->connect_error);
}
$sql = "INSERT INTO question (question, optiona, optionb, optionc, optiond, keyoption)
VALUES ('$question', '$optiona', '$optionb','$optionc','$optiond','$keyoption')";

if ($conn->query($sql) === TRUE) {
    echo "Your response has been recorded successfully.";
} else {
    echo "Error in recording response: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

                                          
                        
             <input type="submit" value="Add another" style="width: 99%"> 
	<input type="button" value="Home" onclick="window.location.href='main.html'" style="width: 99%">          
            </td>
        </tr>
    </form>
    </body>
</div>
    </html>

