
<!DOCTYPE html>
<html>
<style>
body {
    font-family: Verdana, Arial, sans-serif;
    font-size: smaller;
    padding: 50px;
    color: #be7429;
}
h1 {
    text-align: right;
}
h2 {
    text-align: center;
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

input[type=option] {
    background-color: #4CAF50;
    color: white;
    caret-color: transparent;
    padding: 14px 20px;
    margin: 8px 5px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    font-size: 20px;
    width: 45%;
    height: 40px;
}

input[type=option]:hover {
    background-color: #be7429;
}
input[type=next] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 5px;
   caret-color: transparent;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    font-size: 20px;
    width: 95%;
    height: 40px;
}

input[type=next]:hover {
    background-color: #be7429;
}


div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 40px;
}
p.padding {
    padding-top: 1cm;
}
</style>
<div>
    <head>  
    <body background="bgimg.jpg">         
        <title>Quiz</title>
    </head>
    <body>
        <form action="react1.php" method="post">
        <h1><span id="time">00:30</span>
    <form id="form1" runat="server"></h1>
        <tr>
            <td>
                
                    <?php 
                            $servername = "localhost";
                            $username = "root";
                            $password = "0000";
                            $dbname = "questions";

                            $conn = mysqli_connect($servername, $username, $password, $dbname);
                            if(!$conn)
                            {
                                die("connection failed:".mysqli_connect_error());
                            }
                            
                            $query = "SELECT question, optiona, optionb, optionc, optiond, keyoption from question where id=5";
                            $result = mysqli_query($conn, $query);

                            if (mysqli_num_rows($result) > 0) 
                            {
                                while($row = mysqli_fetch_assoc($result)) 
                                    {
                                        $question=$row["question"];
                                        $optiona=$row["optiona"];
                                        $optionb=$row["optionb"];
                                        $optionc=$row["optionc"];
                                        $optiond=$row["optiond"];
                                        $keyoption=strtolower($row["keyoption"]);
                                    }
                            }
                            $conn->close();
                    ?>  
                        
                        
                    <h2><?php echo $question ?></h2>
                    <input type="option" name = "a" id = "a" value="<?php echo $optiona ?>" onclick="dynamic('<?php echo $keyoption; ?>')"; readonly>                 <input type="option" name="b" id = "b" value="<?php echo $optionb ?>" onclick="dynamic('<?php echo $keyoption; ?>')"; readonly >
                    <input type="option" name="c" id = "c" value="<?php echo $optionc ?>" onclick="dynamic('<?php echo $keyoption; ?>')"; readonly>                  <input type="option" name="d" id = "d" value="<?php echo $optiond ?>" onclick="dynamic('<?php echo $keyoption; ?>')"; readonly> 
                    <p class="padding"><input type="next" value="Next question" onclick="window.location.href='ques6.php'" readonly></p>
     
<script>
    var count = 1;
    function dynamic(keyoption)
    {
        count = 1;
     setWrong('a');
     setWrong('b');
     setWrong('c');
     setWrong('d');
     setRight(keyoption);
    }
    function setRight(btn) {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#4CAF50"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#054208"
            count = 1;
        }
    }
    function setWrong(btn) {
        var property = document.getElementById(btn);
        if (count == 0) {
            property.style.backgroundColor = "#4CAF50"
            count = 1;        
        }
        else {
            property.style.backgroundColor = "#8A0707"
            count = 1;
        }
    }
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10)
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (timer-- < 1) {
                window.location = "ques6.php";
                clearInterval(timer);
            }
        }, 1000);
    }

    window.onload = function () {
        var fiveMinutes = 29,
            display = document.querySelector('#time');
        startTimer(fiveMinutes, display);
    };
</script>
                        
                </td>
        </tr>
    </form>
    </body>
</div>
    </html>

