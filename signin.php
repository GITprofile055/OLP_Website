
<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    header("Location:index.php");
}
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $result = mysqli_query($conn, "SELECT *  FROM tb_user WHERE email = '$email' Or email = '$email'");
   $row = mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
    if($password == $row["password"]){
   $_SESSION["login"]= true;
   $_SESSION["id"]= $row["id"];
   header("Location:index.php");
    }
    else{
        echo
        "<script>
        alert('wrong password');</script>";
    }

}
else{
    echo
    "<script>
    alert('user not Registration');</script>";
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
            background-color: #f0f2f5;
        }

        form {
            background-color: #ffff;
            position: absolute;
            width: 320px;
            height: 270px;
            padding: 10px 5px 20px 5px;
            margin: -10vh 850px;
            border-radius: 5px;
            box-shadow: 5px 5px 6px -7px;
        }

        input[type='email'],
        input[type='password'] {
            display: block;
            background-color: #fff;
            margin: auto;
            border: 1.5px solid rgb(200, 200, 200);
            width: 200px;
            padding: 10px 40px;
            border-radius: 5px;
            text-align: center;
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
            margin-left: 300px;
            margin-top: 30vh;
            font-family: "Seoge", Roboto "San francis";

        }

        .container h1 {
            color: #00B894;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

        }

        p {
            font-size: 20px;
            font-weight: 600;
            word-spacing: 3px;

        }
    </style>
</head>

<body>
    <form action="" method="post" autocomplete="off">
        <label>Email</label>

        <input type="email"  id="email" name="email" required/><br /><br />

        <label>Password</label>
        <input type="password" id="password" name="password" required/><br /><br />
 
        <button type="submit" name="submit" >Log in </button> <br /><br />

        <a href="#" class="f-pws">Forget password</a><br />
       
        <a href="signup.php">Registration</a>
        <div class="line"></div><br />
        <button class="btn-2">Create new account </button>

    </form>

    <nav class="me">

        <div class="container">
        <h1>Planet<span style="color:blue; font-size:large; font-weigth:340px;   
    font-size: 1.0em;">Spark</span></h1><br>
            <p>Connect with friends
                and the world around you on planet spark</p>
        </div>
    </nav>


</body>

</html>