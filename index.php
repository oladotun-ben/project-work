<?php
require 'conn.php';
if (isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'project-work');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql= "SELECT * FROM admi WHERE username='$username'AND password = '$password'";
    $query=mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($query);
    session_start();
    $_SESSION['id']=$result['id'];
    $_SESSION['username']=$result['username'];
    $_SESSION['role']=$result['role'];
var_dump($_SESSION);
    header('location:ProjectOneHome.php');
    
}




?>
<!DOCTYPE html>
<html>
    <head>
        <title>Kings University Cafe</title>
    <link rel="stylesheet" href="LoginStyle.css"/>

    </head>

    <body>
        
        <div class="login-box">
            <img src="images/kingsUniversity.png" alt="KU logo" iheight="300px" width="300" id="headtwo">
            
            <h1>Cafeteria Login</h1>
            <form method='post'>
                <div class="user-box">
                    <input type="text" name="username" required="" id="username" placeholder="Username"><br><br>
                    
                </div>
                <div class="user-box">

                    <input type="password" name="password" required="" id="password" placeholder="Password"> <br><br>
                </div>
            <button name='submit' n type='submit' >Log in</button>
                <a href="StudentsPortal.html"><em>Students Login    </em></a>
            </form>
        </div>
    </body>
</html>