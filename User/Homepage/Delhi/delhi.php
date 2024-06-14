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
  <link rel="stylesheet" href="../../Homepage/Delhi/delhi.css" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

      <a href="../homepage.php" style="position: relative;
                                        overflow: hidden; 
                                        padding: 0%; 
                                        height: 55px;
                                        width: 200px;
                                        background-image: url(../../Images/logo813.jpg);
                                        background-size:cover;
                                        align-items: center;
                                        background-repeat: no-repeat;"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="https://timesofindia.indiatimes.com/travel/travel-news" class="hover-underline-animation">News</a>
      <a href="../../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn"> <i class="fas fa-user-alt"></i>
          <?php
          echo getSessionVar('name'); ?>
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
      <img src="../../Images/delhi.jpg" class="stretch" alt="" />
    </div>
    <div class="text">Delhi</div>
    <button formaction="../Mumbai/mumbai.php" title="Mumbai" class="btnleft"><i class='fas fa-arrow-left'></i></button>

    <!--CHHATARPUR TEMPLE  -->
    <div class="box" style="font-family: 'Alata';font-size: 22px;color: #ffb700;"><a
        href="./Destinations/CHHATARPUR TEMPLE/CHHATARPUR TEMPLE.php" style=" color: #ff0000;;text-decoration: none;"><b
          style="font-size: 50;font-family:fantasy;">01</b>&emsp;
        CHHATARPUR TEMPLE
        <hr style="border: 4px solid #f85c5c;">
        <img src="../../Images/delhi1.jpg" style="position:absolute;width:90%;height: 65%;left: 5%;">
      </a>

      <!-- Map Button -->
      <div class="map"><a href="./Delhimap/dmap1.html">
          <i class="fa fa-map-marker" style="font-size:40;"></i></a></div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>

    <!-- LOTUS TEMPLE -->
    <div class="box2" style="font-family: 'Alata';font-size: 22px;color: #ffb700;"><a
        href="./Destinations/LOTUS TEMPLE/LOTUS TEMPLE.php" style=" color: #ff0000;text-decoration: none;"><b
          style="font-size: 50;font-family:fantasy;">02</b>&emsp; LOTUS
        TEMPLE
        <hr style="border: 4px solid #f85c5c;">
        <img src="../../Images/delhi2.jpg" style="position:absolute;width:90%;height: 65%;left: 5%;">
      </a>

      <!-- Map Button -->
      <div class="map"><a href="./Delhimap/dmap2.html"><i class="fa fa-map-marker" style="font-size:40;"></i></a></div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>

    <!-- JAMA MASJID -->
    <div class="box3" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/JAMA MASJID/JAMA MASJID.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">03</b>&emsp;
        JAMA MASJID
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi3.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap3.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- AKSHARDHAM TEMPLE -->
    <div class="box4" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/AKSHARDHAM TEMPLE/AKSHARDHAM TEMPLE.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">04</b>&emsp;
        AKSHARDHAM TEMPLE
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi4.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap4.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- QUTUB MINAR -->
    <div class="box5" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/QUTUB MINAR/QUTUB MINAR.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">05</b>&emsp;
        QUTUB MINAR
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi5.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap5.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!--Delhi Zoo  -->
    <div class="box6" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/SWARGADWAR BEACH/SWARGADWAR BEACH.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">06</b>&emsp;
        Delhi Zoo
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi13.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap6.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- GATEWAY OF INDIA DELHI -->
    <div class="box7" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/GATEWAY OF INDIA DELHI/GATEWAY OF INDIA DELHI.php"
        style=" color: #ff0000; text-decoration: none"><b style="font-size: 50; font-family: fantasy">07</b>&emsp;
        GATEWAY OF INDIA DELHI
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi7.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap7.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- TUMBLE HOUSE -->
    <div class="box8" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/TUMBLE HOUSE/TUMBLE HOUSE.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">08</b>&emsp;
        TUMBLE HOUSE
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi8.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap8.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- DE PAVILION HOTEL -->
    <div class="box9" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/DE PAVILION HOTEL/DE PAVILION HOTEL.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">09</b>&emsp;
        DE PAVILION HOTEL
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi9.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap9.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- LODHI GARDEN  -->
    <div class="box10" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/LODHI GARDEN/LODHI GARDEN.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">10</b>&emsp;
        LODHI GARDEN
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi10.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap10.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- South Delhi Garden -->
    <div class="box11" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/JUHU BEACH delhi TIMINGS/JUHU BEACH delhi TIMINGS.php"
        style=" color: #ff0000; text-decoration: none"><b style="font-size: 50; font-family: fantasy">11</b>&emsp;
        South Delhi Garden
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi14.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap11.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- GATEWAY OF INDIA -->
    <div class="box12" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/TAJHOTEL/TAJHOTEL.php" style=" color: #ff0000; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">12</b>&emsp;
        TAJ MAHAL
        <hr style="border: 4px solid #f85c5c" />
        <img src="../../Images/delhi12.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Delhimap/dmap12.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />



    <div class="boxbtm">
      <p><img class="btmimg" src="../../Images/logo813.jpg" alt="">
      <ul style="list-style-type:none;margin-left:40vh">
        <li>
          <h3>General</h3>
        </li>
        <li><a href="../Pune/pune.php" style="text-decoration:none;color: black;">Pune</a></li>
        <li><a href="../Mumbai/mumbai.php" style="text-decoration:none;color: black;">Mumbai</a></li>
        <li><a href="../Delhi/delhi.php" style="text-decoration:none;color: black;">Delhi</a></li>
        <li><a href="../aboutus.php" style="text-decoration:none;color: black;">About Us</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:60vh">
        <li>
          <h3>Community</h3>
        </li>
        <li><a href="https://timesofindia.indiatimes.com/travel/travel-news" style="text-decoration:none;color: black;">News</a></li>
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