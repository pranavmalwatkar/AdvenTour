<html>

<head>
  <title>Title of the document</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="../AdvenTour/index.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'>
  <meta name="viewport" content="width=device-width, initial-scale=1">

function clearContactInfo() {
    // Clear the text inside the <ul> with id "contact-info"
    document.getElementById('contact-info').innerHTML = '';
  }
  </script>
</head>

<body>
  <form action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="Section_top">
      <div class="content">
        <h1>AdvenTour.in <span style="font-size: large;font-weight: bold;">Adventure and Tourism !</span></h1>
      </div>
    </div>
    <div class="navbar">
      <a href="" class="disabled"></a><a href="" class="disabled"></a>
      <a href="index.php" class="line">HOME</a>
      <a href="https://timesofindia.indiatimes.com/topic/tourism/news" class="line">NEWS</a>
      <a href="advice.html" class="line">TRAVEL ADVICE</a>
      <a href="" class="disabled" style="float: right;"></a><a href="" class="disabled" style="float: right;"></a>
      <a href="../AdvenTour/User/Login/login.html" style="float: right;" class="line">LOGIN</a>
      <a href="../AdvenTour/User/Login/signup.html" style="float: right;" class="line">SIGN UP</a>
    </div>
    <div class="parent">
    </div>
    <div class="text responsive-container">
      <span class="escapes__title">AdvenTour</span>
      <p style="font-size:medium;">AdvenTour is a Travel and Tourism website created for users throughout the world to
        have an easy and friendly environment and interface.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
        laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
        ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
      <div class="escapes__title">Explore</div>
      <p>
        <img src="../AdvenTour/User/Images/delhi2.jpg" alt="" class="img responsive-img">
        <img src="../AdvenTour/User/Images/mumbai1.jpg" alt="" class="img responsive-img">
        <img src="../AdvenTour/User/Images/delhi12.jpg" alt="" class="img responsive-img">
        <img src="../AdvenTour/User/Images/pune5.jpg" alt="" class="img responsive-img">
        <hr>
      </p>
      <p class="escapes__title">Contact Us</p>
      <span style="font-size: 2vh;font-style: italic;">Want to Know more? Send us an Enquiry!</span><br><br>
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdId5cUY9TLLCZfoQoDlq6ZLeamGYGy_Cc1m-HfnwMQL_wciw/viewform?usp=header" 
              width="100%" height="600" frameborder="0" marginheight="0" marginwidth="0" style="border: none;">
      </iframe>
      <hr>
      <div style="position: relative; width: 100%; max-width: 800px; margin: 0 auto;">
        <video src="User/Images/india.mp4" muted loop autoplay type="video/mp4" class="imgclass responsive-video" style="width:100%; display:block;"></video>
        <a href="User/Login/login.html" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index:2;">
          <input type="button" class="expbtn" value="EXPLORE" formaction="">
        </a>
      </div>
      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/35npVaFGHMY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
      <!-- <br> <audio id="sound" src="User/Images/india.mp4" controls autoplay></audio> -->
      <hr>
      <footer style="font-size: medium;">
        <i class='fab fa-facebook-square'></i>
        <i class='fab fa-instagram'></i>
        <i class='fab fa-linkedin'></i>
        <p class=>Powered by <a href="" target="_blank">AdvenTour.in</a></p>
      </footer>
    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['enquire'])) {

  $Fname = $_POST['fname'];
  $Lname = $_POST['lname'];
  $Email = $_POST['email'];
  $Message = $_POST['message'];


  //Connect to the MySQL database
  require_once('./User/Database/functions.php"');

  $conn = DBConnect();

  if (!empty($Fname) &&!empty($Lname) && !empty($Email) && !empty($Message)) {
    $INSERT = "INSERT INTO enquiries(First_name,Last_name,Email,UserComments) VALUES('$Fname','$Lname','$Email','$Message')";
    $result = $conn->query($INSERT);
    if ($result) {
      echo "<script> alert('Enquiry Sent Successfully.');
    window.location.href='index.php';
    </script>";
    } else {
      echo "<script> alert('Please enter all the details.');
            window.location.href='index.php';
            </script>";
    }
  }
}
?>