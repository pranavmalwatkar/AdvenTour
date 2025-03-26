<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../Homepage/homepage.css" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

  <?php
  require_once "../Database/functions.php";
  ?>

  <form>
    <div class="navbar">
      <!-- Invisible buttons-disabled hover -->
      <!-- <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
    <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a> -->

      <a href="../Homepage/homepage.php" style="
            position: relative;
            overflow: hidden;
            padding: 0%;
            height: 55px;
            width: 200px;
            background-image: url(../Images/logo813.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;"><img src="" /></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="https://timesofindia.indiatimes.com/travel/travel-news" class="hover-underline-animation">News</a>
      <a href="../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <?php echo getSessionVar('name'); ?>

        </button>
        <div class="dropdown-content">
          <!-- <a href="../../Homepage/Profile/profile.php">Profile</a> -->
          <a href="./Profile/profile.php">Profile</a>
          <a href="../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>

    <p class="content">ADVENTOUR<br><span style="font-size:5vh">Travel, Explore, Discover !</span></p>
    <button class="button-86" role="button" formaction="./Pune/pune.php">
      Pune
    </button>
    <button class="button-87" role="button" formaction="./Mumbai/mumbai.php">
      Mumbai
    </button>
    <button class="button-88" role="button" formaction="./Delhi/delhi.php">
      Delhi
    </button>

    <div class="escapes__content">
      <span class="escapes__title">Find The Perfect Escape</span>
      <span class="escapes__caption">Discover your ideal Experience</span>
    </div>

    <div class="tourpackage">
      <span class="tour_title">Tour Packages</span>
    </div>
    <!-- <span class="tour__caption">Discover your ideal Experience</span> -->
    <div class="packbox">
      <span class="package1"><img src="../Images/agakhan.jpg" alt=""
          style="height:20vh;width:45vh;float:left; padding:2vh 2vh">
        <p>Pune Full Tour</p>
        <p style="font-size:2vh">Experience the history and culture of Pune on this guided excursion. After a convenient
          hotel pickup, learn about the city’s ancient heritage from an informative local guide and visit sites like Aga
          Khan Palace, where Mahatma Gandhi was once imprisoned, the historic Tulsi Baug market, and the popular
          pilgrimage site Dagadusheth Halwai Ganapati Temple. </p>
        <p style="postion:fixed">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        </p>
        <button type="submit" class="packagebtn" formaction="punetour.php">Book now</button>
      </span>

      <span class="package1"><img src="../Images/mumbai1.jpg" alt=""
          style="height:20vh;width:45vh;float:left; padding:2vh 2vh">
        <p>Mumbai Full Tour</p>
        <p style="font-size:2vh">Mumbai is India’s fashion and film capital, a sprawling, history-filled city
          overlooking the Bay of Bengal. Discover one of the world’s most exciting metropolises on this intimate guided
          visit, which transports you between landmarks in a comfortable, private car. Go deep into the heart of the
          multifaceted city with a flexible, custom-made itinerary, covering all the top sights in a single day. Hotel
          pickup makes for a seamless experience.</p>
        <p style="postion:fixed">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
        </p>
        <button type="submit" class="packagebtn" formaction="mumbaitour.php">Book now</button>
      </span>

      <span class="package1"><img src="../Images/delhi.jpg" alt=""
          style="height:20vh;width:45vh;float:left; padding:2vh 2vh">
        <p>Delhi Full Tour</p>
        <p style="font-size:2vh">Explore the sights of Old and New Delhi with your own private guide on a full-day tour.
          Travel in a private air-conditioned vehicle to UNESCO World Heritage sites including Jama Masjid, Qutub Minar,
          and Humayun's Tomb. You'll also go to other attractions like Raj Ghat—a memorial to Mahatma Gandhi, Parliament
          House, and Chandni Chowk; and temples such as the lavish Akshardham. Includes entrance fees, and round-trip
          transfers from your Delhi hotel, airport or train station. </p>
        <p style="postion:fixed">
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star"></span>
        </p>
        <button type="submit" class="packagebtn" formaction="delhitour.php">Book now</button>
      </span>
    </div>

    <div class="boxbtm">
      <p><img class="btmimg" src="../Images/logo813.jpg" alt="">
      <ul style="list-style-type:none;margin-left:40vh">
        <li>
          <h3 style="color:orangered;">General</h3>
        </li>
        <li><a href="../Homepage/Pune/pune.php" style="text-decoration:none;color: black;">Pune</a></li>
        <li><a href="../Homepage/Mumbai/mumbai.php" style="text-decoration:none;color: black;">Mumbai</a></li>
        <li><a href="../Homepage/Delhi/delhi.php" style="text-decoration:none;color: black;">Delhi</a></li>
        <li><a href="../Homepage/aboutus.php" style="text-decoration:none;color: black;">About Us</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:60vh">
        <li>
          <h3 style="color:orangered;">Community</h3>
        </li>
        <li><a href="" style="text-decoration:none;color: black;">News</a></li>
        <li><a href="" style="text-decoration:none;color: black;">Travel Advice</a></li>
      </ul>
      <ul style="list-style-type:none;float:right;margin-top:-20vh;margin-right:10vh">
        <li>
          <h3 style="color:orangered;">Legal</h3>
        </li>
        <li><a href="" style="text-decoration:none;color: black;">Terms & Conditions</a></li>
        <li><a href="" style="text-decoration:none;color: black;">Booking Terms</a></li>
        <li><a href="" style="text-decoration:none;color: black;">Privacy Policy</a></li>
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
        <a href=""><i class='fab fa-instagram'></i></a>
        <a href=""><i class='fab fa-linkedin-in'></i></a>
        <a href=""><i class='fab fa-twitter'></i></a><br>
        <br>Powered by <a href="../../index.php" target="_blank">AdvenTour.in</a>
      </p>

      <br>
    </div>
  </form>
</body>

</html>