<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <title>ASHUXPTUTOR</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    nav {
      width: 100%;
      height: 60px;
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
      width: 25%;
      text-decoration: none;
      color: white;
      font-weight: bold;
    }

    nav .menu a:first-child {
      color: #00b894;
    }


    /* .images{
  width: 250px;
  height: 150px;
  
} */


    .main-container {
      background-image: url(9.jpg);
      background-repeat: no-repeat;
      background-size: cover;
      width: 100%;
      height: 530px;

      justify-content: center;
      text-align: center;
      color: white;
    }

    .main-container img {
      /* margin-top: 5%; */
      width: 100%;
      height: auto;
      display: block;
      background-size: cover;

    }

    section h2 {
      margin-top: 8%;
      letter-spacing: 3px;
      text-shadow: 1px 1px 2px black;
    }

    section h1 {
      margin: 10px 0 5px 0;
      font-size: 55px;
      font-weight: 100;
      text-shadow: 2px 1px 5px black;
      text-transform: uppercase;
    }

    section p {

      padding: 12px 25px;
      font-size: 25px;
      font-weight: 100;
      text-shadow: 2px 1px 5px black;
      text-transform: uppercase;
    }

    section a {
      padding: 10px 15px;

      outline: none;
      border-radius: 4px;
      text-transform: uppercase;
      font-size: 20px;
      font-weight: 500;
      text-shadow: 2px 1px 5px black;
      text-decoration: none;
    }

    section .button {
      background: white;
      color: black;


    }

    section .button:hover {
      background-color: rgb(156, 32, 214);
    }

    section .btntwo {
      background: #00b894;
      color: white;
    }

    section .btntwo:hover {
      background-color: rgb(156, 32, 214);
    }

    .change_content:after {
      content: '';
      animation: changetext 10s infinite linear;
      color: #00b894;
    }

    @keyframes changetext {
      0% {
        content: "C";
      }

      20% {
        content: "C++";
      }

      35% {
        content: "PHP";
      }

      50% {
        content: "JAVASCRIPT";
      }

      60% {
        content: "JAVA";
      }

      85% {
        content: "PYTHON";
      }

      100% {
        content: "HTML";
      }
    }


    /* ========================================= */



    .box_design {
      position: relative;
      
      width: 100%;
      height: 300px;
      top: 0px;
  z-index: -1;
    }
    .carp {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 400px;
      margin: 30px;
      text-align: center;
      float: left;
     
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
      
    }

    button:hover{
      opacity: 0.7;
    }

    .address {
      position: relative;
      display: inline-block;
      width: 100%;
      height: 400px;
      margin: auto;
      background-color: gray;
    }

    .box {
      max-width: 300px;
      margin: 70px;
      text-align: center;
      float: left;
      text-align: left;
    }

    .box ul li a {
      text-decoration: none;
    }

    .footer {
      width: 100%;
      height: 50px;
      display: block;
      
      padding-top: 15px;
      color: wheat;
      background-color: gray;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav menu="me">
    <div class="logo">
      <h1 class="animated infinite bounce heartBeat">Planet Spark</h1>
    </div>
    <div class="menu">
      <a href="Admin.php"> Home</a>

      <a href="admission.php">ADMISSION</a>
      <a href="contact_us.html">contact</a>
      <a href="about_us.html">About us</a>
    </div>

  </nav>


  <main class="main-container">

    <h1 style="text-align: center; font-style: italic; color: rgb(146, 59, 181);  padding-top: 8%;">Your knowledge is
      worth more <br />with online courses.</h1>
    <section>
      <h2>welcome to india</h2>
      <h1>DO COME & LEARN <span class="change_content "></span></h1>
      <P>WELCOME IN PLANET SPARK </P>
      <a href="signup.php" class="button">sign up</a>
      <a href="signin.php" class="btntwo">sign in</a>
    </section>
  </main>
  <!-- <img src="14.jpg" alt=""> -->



  <div class="box_design">

    <div class="carp">
      <img src="13.jpg" alt="John" style="width:60% ;height:40vh; border-radius: 50%;">
      <h1>John Doe</h1>
      <p>Amity University</p>
      <a href=""><button>Contact US</button></a>
    </div>
    <div class="carp">
      <img src="q0.avif" alt="John" style="width:60% ;height:40vh; border-radius: 50%;">
      <h1>Ms. Anya</h1>
      <p>Harvard University</p>

      <a href=""><button>Contact US</button></a>
    </div>
    <div class="carp">
      <img src="14.jpg" alt="John" style="width:60% ;height:40vh; border-radius: 50%;">
      <h1>SN Singh</h1>
      <p>Sharada University</p>
      <a href=""><button>Contact US</button></a>
    </div>
  </div>


  
  <div class="box_design">

    <div class="carp">
      <img src="20.jpg" alt="John" style="width:60% ;height:40vh; border-radius: 50%;">
      <h1>RK Chavala</h1>
      <p>NI University</p>
      <a href=""><button>Contact US</button></a>
    </div>
    <div class="carp">
      <img src="12.jpg" alt="John" style="width:60% ;height:40vh; border-radius: 50%;">
      <h1>Ms. Anya</h1>
      <p>Harvard University</p>
      <a href=""><button>Contact US</button></a>
    </div>
    <div class="carp">
      <img src="15.jpg" alt="John" style="width:60% ;height: 40vh; border-radius: 50%;">
      <h1>Tannu singh</h1>
      <p>Geeta University</p>
      <a href=""><button>Contact US</button></a>
    </div>
  </div>


  <div class="address">

    <div class="box">

<h1>Top Tutorials</h1><br><br>
HTML Tutorial <br>
CSS Tutorial<br>
JavaScript Tutorial<br>
How To Tutorial<br>
SQL Tutorial<br>
Python Tutorial<br>
W3.CSS Tutorial<br>
Bootstrap Tutorial<br>
PHP Tutorial<br>
Java Tutorial<br>
C++ Tutorial<br>
jQuery Tutorial<br>

    </div>
    <div class="box"> 
      <h1>Our PlanetSpark</h1><br><br>  
    <h4>  <p>PlanetSpark is optimized for learning and training. Examples might be simplified to improve reading and learning. 
        <br><br>Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full
         correctness of all content.<br><br> While using PlanetSpark, you agree to have read and accepted our terms of use, cookie and privacy policy.
</p>  </h4>

   
    </div>
    <div class="box"> 
      <h1>Planet<span style="color:blue; font-size:large; font-weigth:340px;   
    font-size: 1.0em;">Spark</span></h1><br><br>
    <p>Planet spark is an organization working in both <b>Web Development</b> and <b>Software Training.</b><br>
     which aims to make all its clients feel spacial and help them to become successfull.</p>

     <ul>

<a href="" class="fa-facebook"><img src="facebook (1).png" style="height: 20px; width: 20px;"
      alt="">facebook.com</a><br>
<a href="" class="fa-facebook"><img src="twitter.png" style="height: 20px; width: 20px;"
      alt="">twitter.com</a><br>
 <a href="" class="fa-facebook"><img src="instagram.png" style="height: 20px; width: 20px;"
      alt="">instagram.com</a><br>
<a href="" class="fa-facebook"><img src="youtube.png" style="height: 20px; width: 20px;"
      alt="">youtube.com</a><br>
<a href="" class="fa-facebook"><img src="telegram.png" style="height: 20px; width: 20px;"
      alt="">telegram.com</a><br>
<a href="" class="fa-facebook"><img src="social.png" style="height: 20px; width: 20px;"
      alt="">whatsapp.com</a>

</ul>
    </div>

  </div>



  <div class="footer">&copy; Copyright PlanetSpark</div>

</body>

</html>