<html>

<head>
  <style>
    /* scroll to top */
    body {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 20px;
    }

    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: red;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }
  </style>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="../../Homepage/Pune/pune.css" type="text/css" />
</head>

<body>

  <?php
  require_once "../../Database/functions.php";
  ?>
  <form action="" method="POST">
    <div class="navbar">
      <!-- Invisible buttons-disabled hover -->
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
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="https://timesofindia.indiatimes.com/travel/travel-news" class="hover-underline-animation">News</a>
      <a href="../../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <b>
            <?php echo getSessionVar('name'); ?>
          </b>
        </button>
        <div class="dropdown-content">
          <a href="../../Homepage/Profile/profile.php">Profile</a>
          <a href="../../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>

    <div id="body">
      <img src="../../Images/pune1.jpg" class="stretch" alt="" />
    </div>
    <div class="text">Pune</div>
    <button formaction="../Mumbai/mumbai.php" title="Mumbai" class="btnright"><i
        class='fas fa-arrow-right'></i></button>

    <!-- Shaniwar wada -->
    <div class="box" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/Shaniwarwada/shaniwarwada.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">01</b>&emsp; SHANIWAR
        WADA
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune2.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>

      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap1.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹250.00</div>


    </div>

    <!-- Lal Mahal -->
    <div class="box2" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/lalmahal/lalmahal.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">02</b>&emsp; LAL MAHAL
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune3.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>

      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap2.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- Dagdusheth ganpati -->
    <div class="box3" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/DAGDUSHETH GANPATI/DAGDUSHETH GANPATI.php"
        style="color: #ffb700; text-decoration: none"><b style="font-size: 50; font-family: fantasy">03</b>&emsp;
        DAGDUSHETH GANPATI
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune4.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap3.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />





    <!--ISKCON NVCC Pune -->
    <div class="box4" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/ISKCON NVCC Pune/ISKCON NVCC.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">04</b>&emsp;
        ISKCON NVCC PUNE
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune5.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap4.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- Shivneri Fort -->
    <div class="box5" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/Shivneri/shivneri.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">05</b>&emsp;
        SHIVNERI FORT
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune6.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap5.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!--  Phoenix City Mall -->
    <div class="box6" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/Phoenix/Phoenix.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">06</b>&emsp;
        PHOENIX CITY MALL
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune7.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap6.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!--INOX - Elpro City Square -->
    <div class="box7" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/Elpro/Elpro.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">07</b>&emsp;
        INOX - ELPRO CITY SQUARE
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune8.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap7.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- Hotel JW MARRIOTT -->
    <div class="box8" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/JW MARRIOTT/JW MARRIOTT.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">08</b>&emsp;
        HOTEL JW MARRIOTT
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune9.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap8.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- Okayama Friendship Garden -->
    <div class="box9" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/Okayama/Okayama.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">09</b>&emsp;
        OKAYAMA FRIENDSHIP GARDEN
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune10.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap9.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- Sinhagad Fort  -->
    <div class="box10" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/Sinhagad/Sinhagad.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">10</b>&emsp;
        SINHAGAD FORT
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune11.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap10.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- TULSI BAUG SHOPPING MARKET -->
    <div class="box11" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/TULSI BAUG/TULSI BAUG.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">11</b>&emsp;
        TULSI BAUG SHOPPING MARKET
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/pune12.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap11.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!--  AGA KHAN PALACE -->
    <div class="box12" style="font-family: 'Alata'; font-size: 22px; color: #ffb700">
      <a href="./Destinations/AGA KHAN PALACE/AGA KHAN PALACE.php" style="color: #ffb700; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">12</b>&emsp;
        AGA KHAN PALACE
        <hr style="border: 4px solid yellow" />
        <img src="../../Images/agakhan.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Punemap/pmap12.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/shaniwarwada/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />
    <div class="boxbtm">
      <p><img class="btmimg" src="../../Images/logo813.jpg" alt="">
      <ul style="list-style-type:none;margin-left:40vh">
        <li>
          <h3>General</h3>
        </li>
        <li><a href="pune.php" style="text-decoration:none;color: black;">Pune</a></li>
        <li><a href="../Mumbai/mumbai.php" style="text-decoration:none;color: black;">Mumbai</a></li>
        <li><a href="../Delhi/delhi.php" style="text-decoration:none;color: black;">Delhi</a></li>
        <li><a href="../aboutus.php" style="text-decoration:none;color: black;">About Us</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:60vh">
        <li>
          <h3>Community</h3>
        </li>
        <li><a href="#" style="text-decoration:none;color: black;">News</a></li>
        <li><a href="#" style="text-decoration:none;color: black;">Travel Advice</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:10vh">
        <li>
          <h3>Legal</h3>
        </li>
        <li><a href="#" style="text-decoration:none;color: black;">Terms & Conditions</a></li>
        <li><a href="#" style="text-decoration:none;color: black;">Booking Terms</a></li>
        <li><a href="#" style="text-decoration:none;color: black;">Privacy Policy</a></li>
      </ul>
      </p>

      <hr>
      <p style="text-align: center;font-size:2vh">
        2023 Adventour.com All rights reserved.<br />
        The content and images used on this site are copyright protected and
        copyrights vests with the respective owners. The usage of the content
        and images on this website is intended to promote the works and no
        endorsement of the artist shall be implied. Unauthorized use is
        prohibited and punishable by law.
      </p>
      <hr width="20%">
      <p style="text-align:center">
        <a href="#"><i class='fab fa-instagram'></i></a>
        <a href="#"><i class='fab fa-linkedin-in'></i></a>
        <a href="#"><i class='fab fa-twitter'></i></a><br>
        <br>Powered by <a href="../../../AdvenTour.html" target="_blank">AdvenTour.in</a>
      </p>
      <br>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class='fas fa-arrow-up'></i></button>
  </form>
  <script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      event.preventDefault();
      document.documentElement.scrollTop = 0;
    }
  </script>


</body>

</html>