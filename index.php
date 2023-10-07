<?php
require 'config.php';
if(!empty($_SESSION["id"])){
    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
else{
    header("Location:signin.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    
    <title>Index</title>
</head>
<body>
    
    
<style>
 
<!-- ============================================================================================================== -->
* {
      margin: 0;
      padding: 0;

    }
nav {
      width: 100%;
      height: 50px;
      background: black;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      text-transform: uppercase;
      top: 0;
      position: sticky;
    }

    nav .logo {
      width: 25%;
      text-align: center;
      color: #00b894;
      font-family: cursive;

    }

    nav .menu {
      width: 45%;
      text-align: center;
      display: flex;
      justify-content: space-around;
    }

    nav .menu a {
        margin-top:2vh;
      width: 25%;
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    nav .menu a:first-child {
      color: #00b894;
    }
.image{
    width:60%;
    height:480px;
    margin-top:10%;
    margin-left:25%;
}


            .container0 {
                width: 80%;
                height: 60vh;
                font-family: "Seoge", Roboto "San francis";
                top: 0;
      position: sticky;
            }
            .me{
                display:flex;
            }
            .container0 h1{
                width:43%;
                font-size: 41px;    
                margin-top: 90vh;
                margin-left:210px;
                font-weight: 600;
                color: #00b894;
               
                font-family:  serif;
                letter-spacing: 8px;
            }

            .container0 p {
                font-size: 25px;
                font-weight: 600;
                color:white;
                margin-right:210px;
                font-family:serif;
                word-spacing: 3px;
                text-align: center;

            }


            .card-design {
             width: 100%;

              }

              .cards {
                display: flex;
                align-items: center;
                justify-content: center;
                margin-top: 30px;
               }

                .card1 {
                width: 23%;
                height: auto;
                box-shadow: black -2px 7px 22px -7px;
                border-radius: 10px;
                background:#00b894; 

               }
               .card1:hover {
                background:linear-gradient(red, blue);
                
            }



               .card1 p {
                     padding: 10px;
                     text-align: justify;
                        text-align-last: center;
                      
                         }

                          .card2 {
                         width: 23%;
                         height: auto;
                         margin-left: 20px;
                         border-radius: 10px; 
                          box-shadow: black -2px 7px 22px -7px;
                          background:#00b894;
                        }
                        .card2:hover {
                background:linear-gradient(red, blue);
            }
                        .card2 p {
                            padding: 10px;
                           text-align: justify;
                            text-align-last: center;
                           
                                 }
                                   .card3 {
                                width: 23%;
                                   height: auto;
                                margin-left: 20px;
                                 border-radius: 10px;
                                 box-shadow: black -2px 7px 22px -7px;
                                 background:#00b894;
                                   }
                                   .card3:hover {
                                    background:linear-gradient(red, blue);

                                      }

                           .card3 p {
                            padding: 10px;
                          text-align: justify;
                          text-align-last: center;

                   }


             .cards img {

              width: 150px;
              height: 180px;
              margin-left: 55px;
              border-radius: 50%;
              
              margin-top: 5px;

            }

           
            .container2 {

                background-color: white;
                width: 100%;
                height: 90vh;
                display: flex;

            }

            .text {
                text-align: center;
                width: 100%;
               color:blue;
               font-family:serif;
            }
            

            .footer{
                margin-top: 50px;
      padding-top: 25px;
                background-color:black;
                color:white;
                height: 40px;
                text-align: center;
                
            }
        </style>
        <nav menu="me">
    <div class="logo">
      <h1 class="animated infinite bounce heartBeat">Planet Spark</h1>
    </div>
    <div class="menu">
      <a href="http://127.0.0.1:5500/Admin.html"> Home</a>

      <a href="admission.php">ADMISSION</a>
      <a href="contact_us.html">contact</a>
      <a href="about_us.html">About us</a>
    </div>

  </nav>

<div class="image">
    <img src="11.jpg" alt="banner">
</div>

        </div>
        <div class="text">
            <h1>Welcome to our Courses</h1>
        </div>
        <div class="card-design">
            <div class="cards">
                <div class="card1">
                    <a href=""><img class="imgs" src="c++.png" alt=""></a>
                    <!-- <h1>C LANGUAGE</h1> -->
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="card2">
                    <a href=""><img class="imgs" src="letter-c.png" alt=""></a>
                <!-- <h1>C LANGUAGE</h1> -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                </div>
                <div class="card3">
                    <a href=""><img class="imgs" src="java.png" alt=""></a>
                    <!-- <h1>C LANGUAGE</h1> -->
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam ad </p>
                </div>

            </div>
            <div class="card-design2">

                <div class="cards">
                    <div class="card1">
                       <a href=""> <img class="imgs" src="python.png" alt=""></a>
                        <!-- <h1>C LANGUAGE</h1> -->
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitati.</p>
                    </div>
                    <div class="card2">
                        <a href=""><img class="imgs" src="php.png" alt=""></a>
                        <!-- <h1>C LANGUAGE</h1> -->
                        <p>Lorem ipsum dolor sit amet, consectebore
                            </p>
                    </div>
                    <div class="card3">
                        <a href="https://www.w3schools.com/js/default.asp"><img class="imgs" src="javascript.png" alt=""></a>
                        <!-- <h1>C LANGUAGE</h1> -->
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam ad it</p>
                    </div>

                </div>
            </div>

            <footer class="footer">&copy; 2023-24 Online learning
                platforms. All rights reserved.
            </footer>



</body>
</html>