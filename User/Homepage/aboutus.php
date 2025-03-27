<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="aboutus.css" type="text/css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  require_once "../Database/functions.php";
  ?>
  <form action="">
    <div class="navbar">
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
      <a href="http://" target="_blank" rel="noopener noreferrer" class="disabled"></a>
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
      <a href="./aboutus.php" class="hover-underline-animation">About Us</a>
      <a href="../Enquire/enquire.php" class="hover-underline-animation">Enquire</a>
      <div class="dropdown">
        <button class="dropbtn">
          <i class="fas fa-user-alt"></i>
          <b>
            <?php echo getSessionVar('name'); ?>
          </b>
        </button>
        <div class="dropdown-content">
          <a href="./Profile/profile.php">Profile</a>
          <a href="../Login/login.html">Sign Out</a>
        </div>
        &emsp;&emsp;&emsp;&emsp;&nbsp;
      </div>
    </div>
    <div class="about-section">
      <h1>About Us</h1>
      <p>Made By Aaryan And Pranav, SY BBA(CA), ICCS.</p>
      <p>
        AdvenTour is a Travel and Tourism website created for users throughout the world to have an easy and friendly
        environment and interface.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
    </div>

    <h2 style="text-align: center">OUR TEAM</h2>

    <div class="card">
      <img src="../Images/aaryan.jpg" alt="John" style="width: 100%" />
      <h2>Aaryan Ojha</h2>
      <p class="title">CEO & Founder, Designer</p>
      <p>ICCS</p>
      <div style="margin: 24px 0">
        <a href="https://www.youtube.com/channel/UC_aaryan"><i class='fa fa-youtube'></i></a>
        <a href="https://www.linkedin.com/in/aaryan-ojha-6ab578270"><i class='fa fa-linkedin'></i></a>
        <a href="path/to/aaryan_resume.pdf"><i class='fa fa-file'></i></a>
      </div>
      <p><button>Contact</button></p>
    </div>

    <div class="card2">
      <img src="../Images/pranav.jpg" alt="John" style="width: 100%" />
      <h2>Pranav Malwatkar</h2>
      <p class="title">FULL STACK DEVELOPER</p>
      <div style="margin: 24px 0">
        <a href="https://www.youtube.com/@SkillUpWithPranav"><i class='fa fa-youtube'></i></a>
        <a href="https://www.linkedin.com/in/pranav-malwatkar-9834b1239/"><i class='fa fa-linkedin'></i></a>
        <a href="https://drive.google.com/file/d/1wqjC8OoMltvBWxArrWwpcyidkqdREKhm/view?usp=sharing"><i class='fa fa-file'></i></a>
      </div>
      <p><button>Contact</button></p> 
    </div>

    <div style="text-align: center">AdvenTour ko banaya hai</div>
  </form>
</body>

</html>