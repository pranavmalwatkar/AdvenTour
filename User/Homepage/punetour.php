<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

    #img1 {
      width: 110vh;
      margin-left: 8vh;
      padding: 8vh 0vh;

    }

    #img2 {
      width: 80vh;
      height: 29vh;
      margin-left: 119vh;
      margin-top: -74vh;
    }

    #img1,
    #img2:hover {
      cursor: pointer;

    }
  </style>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous">
  </script>
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="tour.css" type="text/css" />
</head>

<body>
  <?php
  require_once "../Database/functions.php";
  ?>
  <form action="../Database/bookdetails.php" method="POST">
    <div class="navbar">
      <!-- Invisible buttons-disabled hover -->
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>

      <a href="homepage.php" style="
            position: relative;
            overflow: hidden;
            padding: 0%;
            height: 55px;
            width: 200px;
            background-image: url(../Images/logo813.jpg);
            background-size: cover;
            align-items: center;
            background-repeat: no-repeat;
          "></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="https://timesofindia.indiatimes.com/travel/travel-news" class="hover-underline-animation">News</a>
      <a href="../Homepage/aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <?php
          echo getSessionVar('name'); ?>
          </b>
        </button>
        <div class="dropdown-content">
          <a href="../Homepage/Profile/profile.php">Profile</a>
          <a href="../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>
    <span>

      <img src="../Images/pune10.jpg" class="stretch" id="img1" />
      <img src="../Images/agakhan.jpg" class="stretch" style="width:80vh;height:35vh;padding:8vh 0vh;" />
      <img src="../Images/pune6.jpg" class="stretch" id="img2" />
    </span>



    <div class="mainbox">
      <span class="boxcontent" style="margin-top:-50vh;margin-left:-50vh">
        <h1 style="border-left:4px solid orangered">&nbsp; Guided Highlights of Pune Tour with a local <br>&nbsp; (24
          Hrs Sightseeing in AC Bus)</h1>
        <input type="hidden" name="destination" value="PuneTour">

      </span>
      <br>
      <span class="boxcontent"><video src="../Images/Pune.mp4" muted loop autoplay type="video/mp4"
          class="imgclass"></video>Pune is a city located in the western
        Indian state of Maharashtra. It is the second-largest city in the state and is known as the "Oxford of the East"
        due to the presence of several reputed educational institutions.
        Historically, Pune was the seat of the Peshwas, who were the prime ministers of the Maratha Empire. The city
        played a significant role in the Indian independence movement, and many prominent freedom fighters such as
        Mahatma Gandhi, Jawaharlal Nehru, and Subhash Chandra Bose had links to the city.
        Today, Pune is a bustling metropolis that is known for its vibrant culture, food, and nightlife. The city has a
        rich history and is home to several museums, forts, and other historical landmarks. Additionally, Pune is
        surrounded by beautiful hills and valleys, making it a popular destination for trekkers and nature lovers. <br>
        <br><br>
        <p>
        <ul style="list-style-type: none;">
          <li><i class="fa fa-group"></i> Ages 0-120</li>
          <li><i class='far fa-clock'></i> Duration: 24h</li>
          <li><i class='fas fa-stopwatch'></i> Start time: Check availability</li>
          <li><i class="fa fa-globe"></i> English,Hindi,Marathi</li>
          <li></li>
        </ul>
        </p>
        <span class="pay">
          <h1 style="border-left: 4px solid orangered">&nbsp;Reserve your spot</h1>
          <input type="date" name="" id="">

          <p class="price"><b>Premium Tour with Bus/Volvo</b><input type="radio" name="radio" id="" value="radio"><br>
            Premium<br>
            Local Snacks<br>
            AC Bus<br>
            Pickup included<br>
            Per group (up to 5) x ₹20,000.00<br>
            <b>Total ₹20,000.00</b><br>
            (No additional taxes or booking fees)
          </p>
          <b style="font-size:4vh">Total ₹20,000.00</b>
          <input type="hidden" name="price" value="20000">

          <button class="btn1" formaction="../Database/bookdetails.php" name="submit">Booknow</button>
        </span>
        <p>

        <h3>What's included</h3>
        <ol>
          <li> Friendly Storyteller/Guide</li>
          <li> Hotel pickup</li>
          <li> Great local tips and recommendations</li>
        </ol>
        <h3>What's not included</h3>
        <ul>
          <li>Lunch</li>
          <li>Entrance Tickets to any Historical Place</li>
          <li>Bottled water</li>
          <li>Entry/Admission - Aga Khan Palace</li>
          <li>Entry/Admission - Shaniwar Wada</li>
        </ul>
        </p>
        <span style="font-weight:100">
          <h3>What To Expect</h3>
          <b>Itinrary</b> <br>

          This is a typical itinerary for this product <br>

          <b>Pickup At</b>: Wakad, Pune India <br>

          <b>Stop At</b>: Aga Khan Palace,Yerwada, Pune India
          We will begin our tour from Aga Khan Palace, the ancient place that is riddled with history and heritage, it
          served as a prison for Mahatma Gandhi.

          <br>Duration: 1 hour <br>

          <b>Stop At</b>: ISKCON NVCC, Pune-411030 India <br>

          ISKCON NVCC is a temple complex located in the heart of Pune city in India. It is a branch of the
          International
          Society for Krishna Consciousness (ISKCON), dedicated to promoting the teachings of the Bhagavad Gita and the
          practice of bhakti-yoga.<br>

          <b> Duration</b>: 1 hour<br>

          <b>Stop At</b>: Dagadusheth Halwai Ganapati Temple, Ganpati Bhavan, 250, Budhvar Peth, Pune 411002 India<br>

          Experience the divinity of the Dagdusheth Halwai Ganapati Mandir dedicated to Lord Shri Ganesha and other
          temples of dedicated to load Ganesha.<br>

          <b>Duration</b>: 30 minutes<br>

          <b>Stop At</b>: Tulsi Baug Shopping Market, Tulsi Baug Near Vishrambaug Wada Mandai Vegetable Market Tulsi
          Baug Near
          Vishrambaug Wada, Pune 411046 India<br>

          Visit the one of the Oldest markets of Pune, Tulsi Bagh<br>



          <b>Stop At</b>: Shaniwar Wada, Shaniwar Peth, Pune 411030 India<br>

          Visit the Shaniwar Wada Fort, Childhood home of founder of Maratha Empire and 180 degree view of architecture
          in
          the city and centuries old buildings and markets of Pune.<br>

          <b>Duration</b>: 1 hour<br>

          <b>Stop At</b>: Lal Mahal, Pune 411030 India.<br>

          Lal Mahal is a historical palace located in Pune,
          India. It was constructed in the 17th century and is known for its association with
          the legendary warrior king, Shivaji Maharaj.<br>

          <b>Duration</b>: 1 hour<br>

          <b>Duration</b>: 1 day<br>
          <b>Stop At</b>: Hotel JW MARRIOTT, Pune India.<br>


          <b>Duration</b>: 1 hour<br>

          <b>Stop At</b>: Shivneri Fort, Pune India.<br>

          Shivneri Fort is a 17th-century hill fort located near Junnar in Pune,
          Maharashtra. It is known as the birthplace of the Maratha warrior king, Shivaji Maharaj.<br>

          <b>Duration</b>: 1 hour<br>

          <b>Stop At</b>: Phoenix City Mall, Pune India.<br>
          Phoenix City Mall is a popular shopping mall located in Pune,
          India. It offers a wide range of shopping, dining, and entertainment options for visitors.<br>

          <b>Duration</b>: 1 hour.<br>

          <b>Stop At</b>: INOX - Elpro City Square, Pune India<br>
          INOX - Elpro City Square is a movie theater located in Pune, India,
          It is part of the INOX chain of movie theaters and is situated in the Elpro City Square shopping mall.<br>

          <b>Duration</b>: 1 hour<br>

          <b>Stop At</b>: Okayama Friendship Garden, Pune India<br>
          Okayama Friendship Garden is a beautiful Japanese-style garden located in Pune, India.
          It was established in 1969 to celebrate the sister city relationship between Pune and Okayama in Japan.<br>

          <b>Duration</b>: 1 hour<br>

          <b>Stop At</b>: Sinhagad Fort, Pune India<br>
          Sinhagad Fort is a historical fortress located on a hilltop in Pune, Maharashtra, India.
          It is known for its significant role in the Maratha Empire and offers stunning views of the surrounding
          landscape.<br>

          <b> Duration</b>: 1 hour<br>
        </span>
        <p>
        <h3>Departure and return</h3>
        Departure details<br>
        Traveller pickup is offered.<br>
        <br>We provide hotel pick up and drop from all the hotels located within Pune City Center limit, please reach
        out to use for more information.
        Airports:<br>
        Lohegaon Airport, Pune India<br>
        <br>Hotel pickup is offered. View the hotel list on our checkout page to see if yours is included among the
        pickup points.
        Return details<br>
        Returns to original departure point<br>
        </p>
        <p>
        <h2 style="color:orangered">Itinerary</h2>
        <ul>
          <li>You'll get picked up: Wakad</li>
          <li>INOX - Elpro City Square</li>
          <li>JW Marriott Hotel Pune</li>
          <li>Aga Khan Palace</li>
          <li>Shaniwar Wada</li>
          <li>Dagdusheth ganpati</li>
          <li>Phoenix City Mall</li>
          <li>Lal Mahal</li>
          <li>TULSI BAUG SHOPPING MARKET</li>
          <li>Okayama Friendship Garden</li>
          <li>ISKCON NVCC Pune</li>
          <li>Shivneri Fort</li>
          <li>Sinhagad Fort</li>
          <li>You'll return to the starting point:Wakad</li>
        </ul>
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=19hb4QJctcikPxbFJDEhUEoYLdPkDtFg&ehbc=2E312F"
          width="1200" height="550" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>

        </p>
      </span>
      <h1 style="border-left:4px solid orangered">&nbsp;Customer Reviews</h1><br>

      <div class="review-card">
        <div class="review-header">
          <img src="https://www.thestatesman.com/wp-content/uploads/2022/09/03_Merged.jpg" alt="Customer Image">
          <h3 style="color:black">Narendra Modi</h3>
        </div>
        <div class="review-body">
          <p>Excellent Website. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis suscipit
            neque. Nullam quis orci vitae magna maximus interdum. Sed aliquet dolor eget libero auctor vestibulum.</p>
          <div class="review-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
        </div>
      </div>

      <div class="review-card" style="margin-top:-46vh;margin-right:-120vh">
        <div class="review-header">
          <img src="../Images/pranav.jpg" alt="Customer Image">
          <h3 style="color:black">Pranav</h3>
        </div>
        <div class="review-body">
          <p>Very good Website. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis suscipit
            neque. Nullam quis orci vitae magna maximus interdum. Sed aliquet dolor eget libero auctor vestibulum.</p>
          <div class="review-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
        </div>
      </div>

      <div class="review-card" style="margin-top:-46vh;margin-left:-120vh">
        <div class="review-header">
          <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/ipl/IPLHeadshot2023/57.png"
            alt="Customer Image">
          <h3 style="color:black">MS Dhoni</h3>
        </div>
        <div class="review-body">
          <p>Very good Website. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis suscipit
            neque. Nullam quis orci vitae magna maximus interdum. Sed aliquet dolor eget libero auctor vestibulum.</p>
          <div class="review-rating">
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
            <span class="star">&#9733;</span>
          </div>
        </div>

      </div>




      <div class="boxbtm" style="top">
        <p><img class="btmimg" src="../Images/logo813" alt="">
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
          <br>Powered by <a href="../../AdvenTour.html" target="_blank">AdvenTour.in</a>
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