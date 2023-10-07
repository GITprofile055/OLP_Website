<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
  }
  .course-box {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
  }
  .course-title {
    font-size: 24px;
    margin-bottom: 10px;
  }
  .course-description {
    font-size: 16px;
    color: #777;
    margin-bottom: 15px;
  }
  .course-rate {
    font-size: 28px;
    color: #00aaff;
    margin-bottom: 10px;
  }
  .course-enroll-button {
    padding: 10px 20px;
    background-color: #00b894;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  .course-enroll-button:hover {
    background-color: #0088cc;
  }
</style>

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

  <div class="course-box">
    <h2 class="course-title">Web Development Course</h2>
    <p class="course-description">Learn how to build websites and web applications.</p>
    <span class="course-rate">$199</span>
    <button class="course-enroll-button">Enroll Now</button>
  </div>

</body>
</html>