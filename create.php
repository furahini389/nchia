<?php
//send data to the database
$host = "localhost";
$dbuser = "root";
$dbname = "SANs";
$dbpassword = "";
$connection = mysqli_connect($host, $dbuser, $dbpassword, $dbname);
if (isset($_POST['submit'])) {
    $studentId = $_POST['studentId'];
    $studentName = $_POST['studentName'];
    $studentRegNo = $_POST['studentRegNo'];
    $studentCourse = $_POST['studentCourse'];
    
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "INSERT INTO student VALUES('', '$studentName', '$studentRegNo', '$studentCourse', '$password', '$role')";
    mysqli_query($connection, $query);
    header('location:log in.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico.png">
   
    <title>SANs</title>
    <a href="log in.php" style="color:white;">LOG OUT</a>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: space-between;
            background-color:pink;
        }

        .split {
            flex: 1;
            overflow: hidden;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .split.left {
            background-color: blue;
            
        }
        

        .split.right {
            background-color: blue;
        }

        .fo {
            text-align: center;
            padding-top: 50px;
        }

        .wid {
            width: 500px;
            text-align: center;
        }

        .btnRegister {
            background: #0099cc;
            font-size: 18px;
            border-radius: 10px;
            color: white;
        }
        img{
            border-radius:100%;
        }
    </style>
</head>
<body>
    <div class="split left" ><img src="f.jpg "  width=100% ></div>
    <div class="split">
        <form class="fo" action="create.php" method="post">
            <h1 style="color: blue"><i><b>REGISTRATION</b></i></h1>
            <input class="wid" type="text" name="studentName" placeholder="STUDENT NAME"><br><br>
            <input class="wid" type="text" name="studentRegNo" placeholder="REGISTRATION NUMBER"><br><br>
            <input class="wid" type="text" name="studentCourse" placeholder="COURSE/FACULTY"><br><br>
            <input class="" type="PASSWORD" name="password" placeholder="PASSWORD"><br><br>
            <input class="wid" type="text" name="role" placeholder="ROLE"><br><br>
            <button name="submit" class="btnRegister">SUBMIT</button>
        </form>
    </div>
    <div class="split right"><img src="m.jpg" alt="" width=100%></div>
</body>
</html>
