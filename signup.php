<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location:index.php");
}
if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT *  FROM tb_user WHERE username = '$username' Or email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        echo
     "<script>
     alert('Username or email Has Already Taken');
     </script>";   
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password' )";
            mysqli_query($conn, $query);
            echo
            "<script>
            alert('Registration successful');</script>";
        }
        else{
            echo
            "<script>
            alert('password does not match');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            outline: none;
        }

        body {
            width: 100%;
            background-image: url(12.jpg);
           
        }

        form {
            background-color: #ffff;
            position: absolute;
            width: 370px;
            height: 350px;
            padding: 10px 5px 20px 5px;
            margin: -15vh 750px;    
            border-radius: 25px;
            box-shadow: 5px 5px 6px -7px;
        }

        input[type='text'],
        input[type='text'] ,
        input[type='email'] ,
        input[type='password'] ,
        input[type='password'] {
            display: block;
            background-color: #fff;
            margin: auto;
            border: 1.5px solid rgb(200, 200, 200);
            width: 200px;
            padding: 5px 20px;
            border-radius: 5px;

            color: black;
            font-family: 'segoe UI';
            font-size: 15px;
        }

        button {
            border: none;
            background-color: #00B894;
            color: white;
            margin: auto;
            width: 283px;
            display: block;
            border-radius: 5px;
            padding: 10px 0;
            font-weight: bold;
            cursor: pointer;

        }

        .f-pws {
            display: block;
            width: 200px;
            margin: auto;
            color: #00B894;
            padding-left: 80px;
            font-family: 'Segoe UI';
            font-weight: 400;
        }

        .line {
            border-top: 1px solid #222;
            opacity: 0.2;
        }

        .btn2 {
            width: 180px;
            font-size: 14px;
            background-color: #00B894;
            text-align: center;

        }

        .sub-link h3 {
            width: 270px;
            position: relative;
            color: black;
            font-family: 'Seoge UI', Arial;
            padding: 130px 890px;
            font-size: 12px;
            font-weight: 600;
        }

        .sub-link h3 a {
            color: black;
            font-weight: bold;
            font-size: 13px;
            padding-bottom: 10px;
        }

        .container {
            width: 350px;
            margin-left: 270px;
            margin-top: 25vh;
            font-family: "Seoge", Roboto "San francis";

        }

        .container h1 {
            color: #00B894;
            font-size: 70px;
            /* font-family: cursive; */
        
        }

        p {
            color: black;
            font-size: 35px;
            font-weight: 600;
            word-spacing: 3px;
            width: 480px;
            margin-left: -59px;
            border:1px dot black;
            
        }
.wtn{
    width: 6%;
   
}
    </style>
</head>

<body>


    <form class="" action="" method="post" autocomplete="off">

    
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required/><br />

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required/><br />

        <label for="email">Email id</label>
        <input type="email" name="email" id="email" required/><br />

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required/><br />

        <label for="confirmpassword">Confirm password</label>
        <input type="password"name="confirmpassword" id="confirmpassword" required/><br /><br><br><br>

        <button type="submit" name="submit">Registration </button> <br />
        <a href="signin.php">Login</a><br />
        <div class="line"></div>
        <a href="#" class="f-pws">Forget password</a><br />
        


    </form>
    <nav class="me">
    
        <div class="container">
            
        <h1>Planet<span style="color:blue; font-size:large; font-weigth:340px;   
    font-size: 1.0em;">Spark</span></h1><br>
            <div class="wtn"><a href="Admin.php">HOME</a></div>
            <p> "<span style="color:blue; font-size: 70px; font-weigth:840px;   
    font-size: 1.0em;">F</span>ree Register yourself for the upcoming training from Home organize by planet spark"</p>
        </div>
    </nav>


</body>

</html>