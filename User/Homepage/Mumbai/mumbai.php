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
  <link rel="stylesheet" href="../../Homepage/Mumbai/mumbai.css" type="text/css" />
  <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <?php
  require_once "../../Database/functions.php"
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
      <img src="../../Images/mumbai.jpg" class="stretch" alt="" />
    </div>
    <div class="text">Mumbai</div>
    <button formaction="../Delhi/delhi.php" title="Delhi" class="btnright"><i class='fas fa-arrow-right'></i></button>
    <button formaction="../Pune/pune.php" title="Pune" class="btnleft"><i class='fas fa-arrow-left'></i></button>

    <!--GATEWAY OF INDIA  -->
    <div class="box" style="font-family: 'Alata';font-size: 22px;color: #ffb700;"><a
        href="./Destinations/GATEWAY OF INDIA/GATEWAY OF INDIA.php" style="color: #3090ff;;text-decoration: none;"><b
          style="font-size: 50;font-family:fantasy;">01</b>&emsp;
        GATEWAY OF INDIA
        <hr style="border: 4px solid lightblue;">
        <img src="../../Images/mumbai1.jpg" style="position:absolute;width:90%;height: 65%;left: 5%;">
      </a>

      <!-- Map Button -->
      <div class="map"><a href="./Mumbaimap/mmap1.html"><i class="fa fa-map-marker" style="font-size:40;"></i></a></div>

      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/GATE/shaniwarwada.php">Book Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>


    <!-- TAJ HOTEL -->
    <div class="box2" style="font-family: 'Alata';font-size: 22px;color: #ffb700;"><a
        href="./Destinations/TAJ HOTEL/TAJ HOTEL.php" style="color: #3090ff;text-decoration: none;"><b
          style="font-size: 50;font-family:fantasy;">02</b>&emsp; TAJ
        HOTEL
        <hr style="border: 4px solid lightblue;">
        <img src="../../Images/mumbai2.jpg" style="position:absolute;width:90%;height: 65%;left: 5%;">
      </a>

      <!-- Map Button -->
      <div class="map"><a href="./Mumbaimap/mmap2.html"><i class="fa fa-map-marker" style="font-size:40;"></i></a></div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>

    <!-- SHREE SIDDHIVINAYAK TEMPLE -->
    <div class="box3" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/SHREE SIDDHIVINAYAK TEMPLE/SHREE SIDDHIVINAYAK TEMPLE.php"
        style="color: #3090ff; text-decoration: none"><b style="font-size: 50; font-family: fantasy">03</b>&emsp;
        SHREE SIDDHIVINAYAK TEMPLE
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai3.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap3.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- HANGING GARDEN  -->
    <div class="box4" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/HANGING GARDEN/HANGING GARDEN.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">04</b>&emsp;
        HANGING GARDEN
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai4.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap4.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- OBEROI MALL -->
    <div class="box5" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/OBEROI MALL/OBEROI MALL.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">05</b>&emsp;
        OBEROI MALL
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai5.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap5.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- STREET SHOPPING  -->
    <div class="box6" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/STREET SHOPPING/STREET SHOPPING.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">06</b>&emsp;
        STREET SHOPPING
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai6.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap6.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- MALABAR HILL FOREST TRAIL -->
    <div class="box7" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/MALABAR HILL/MALABAR HILL.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">07</b>&emsp;
        MALABAR HILL FOREST TRAIL
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai7.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap7.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- BABULNATH MANDIR -->
    <div class="box8" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/BABULNATH MANDIR/BABULNATH MANDIR.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">08</b>&emsp;
        BABULNATH MANDIR
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai8.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap8.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- HAJI ALI DARGAH -->
    <div class="box9" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/HAJI ALI DARGAH/HAJI ALI DARGAH.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">09</b>&emsp;
        HAJI ALI DARGAH
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai9.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap9.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- FUN CITY COME PLAY! -->
    <div class="box10" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/FUN CITY COME PLAY!/FUN CITY COME PLAY!.php"
        style="color: #3090ff; text-decoration: none"><b style="font-size: 50; font-family: fantasy">10</b>&emsp;
        FUN CITY COME PLAY!
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai10.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap10.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- MARINE DRIVE MUMBAI -->
    <div class="box11" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/MARINE DRIVE MUMBAI/MARINE DRIVE MUMBAI.php"
        style="color: #3090ff; text-decoration: none"><b style="font-size: 50; font-family: fantasy">11</b>&emsp;
        MARINE DRIVE MUMBAI
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/mumbai11.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">

        <a href="./Mumbaimap/mmap11.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
      <div style="position:absolute;bottom:2%;right:35%;color:black;">₹ 12449.00</div>
    </div>
    <br />

    <!-- ELEPHANTA CAVES -->
    <div class="box12" style="font-family: 'Alata';font-size: 22px;">
      <a href="./Destinations/ELEPHANTA CAVES/ELEPHANTA CAVES.php" style="color: #3090ff; text-decoration: none"><b
          style="font-size: 50; font-family: fantasy">12</b>&emsp;
        ELEPHANTA CAVES
        <hr style="border: 4px solid lightblue" />
        <img src="../../Images/caves.jpg" style="position: absolute; width: 90%; height: 65%; left: 5%" />
      </a>
      <!-- Map Button -->
      <div class="map">
        <a href="./Mumbaimap/mmap12.html"><i class="fa fa-map-marker" style="font-size: 40"></i></a>
      </div>
      <p><button class="btn" formaction="../../Homepage/Mumbai/Destinations/Shaniwarwada/shaniwarwada.php">Book
          Now!</button></p>
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