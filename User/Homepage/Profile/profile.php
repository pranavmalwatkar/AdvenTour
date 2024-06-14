<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="../../Homepage/Profile/profile.css" type="text/css" />
</head>

<body>
  <?php
  require_once "../../Database/functions.php";
  ?>

  <div class="navbar">
    <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
    <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>

    <a href="../homepage.php" style="
          position: relative;
          overflow: hidden;
          padding: 0%;
          height: 55px;
          width: 200px;
          background-image: url(../../Images/logo813.jpg);
          background-size: cover;
          align-items: center;
          background-repeat: no-repeat;
        "></a>
    <a href="https://timesofindia.indiatimes.com/travel/travel-news" class="hover-underline-animation">News</a>
    <a href="../../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
    <a href="../../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>

    <div class="dropdown">
      <button class="dropbtn">Hi <b>
          <?php echo getSessionVar('name'); ?>
        </b></button>
      <div class="dropdown-content">
        <a href="../../Login/login.html">Sign Out</a>
      </div>
      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    </div>
  </div>


  <div class="box">
    <!-- <input type="file"  name="img" accept="image/*" style="z-index:11;position:absolute;top:160px;left:120px"> -->
    <div class="circle">
      <img src="../../Images/beach.jpg" />
    </div>
    <h2 style="
          font-weight: 500;
          position: absolute;
          top: 33%;
          left: 25%;
        ">&ensp;
      <?php echo getSessionVar('name'); ?>
    </h2>
    <a href="../../Homepage/Profile/profile.php" class="text" style="color: blue">My profile</a>
    <a href="../../Homepage/Profile/booking.php" class="text" style=" top: 70%; color: blue">My Bookings</a>
  </div>

  <div class="box2">
    <h3 style="
          position: absolute;
          top: 2%;
          left: 5%;
         
          font-weight: 500;
        ">
      My Profile:
    </h3>
    <p style="
          
          font-weight: 500;
          position: absolute;
          top: 30%;
        ">
      <i style="font-size: 20px" class="fas">&#xf406;</i> Name:
      <?php echo getSessionVar('name'); ?>
    </p>
    <p style="
          font-weight: 500;
          position: absolute;
          left: 60%;
          top: 30%;
        ">
      <i style="font-size: 20px" class="fas">&#xf0e0;</i> Email:
      <?php echo getSessionVar('email'); ?>
    </p>
    <a href="./updateform.html" style="
          font-weight: 500;
          position: absolute;
          top: 80%;
          left: 5%;
        ">
      <i style="font-size: 20px" class="fas">&#xf4ff;</i> Update Details</a>
    <a href="./deleteform.php" style="
          font-weight: 500;
          position: absolute;
          top: 80%;
          right: 15%;
        ">
      <i class="material-icons">delete</i> Delete Account</a>
  </div>
</body>

</html>