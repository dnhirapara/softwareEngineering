<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="regi_user.css">
    </head>
    <body>
        <form action="home.php" method="POST">
            <div class="container">
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
              <?php
              /** @var type $_GET */
              if(isset($_GET["msg"])){
                  echo $_GET["msg"];
                    ?>
              
              you have already account<br>
                    try to login <a href="login.php">here</a> or create new account below.
              <?php
                }
                ?>
              <label for="user"><b>UserName</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>
              
              <label for="email"><b>Email</b></label>
              <input type="text" pattern="[a-z0-9._%+-]+@(gmail|yahoo)\.[a-z]{2,}$" placeholder="Enter Email" name="email" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
              <hr>

              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              <button type="submit" class="registerbtn">Register</button>
            </div>

            <div class="container signin">
              <p>Already have an account? <a href="login.html">Sign in</a>.</p>
            </div>
        </form> 
    </body>
</html>
