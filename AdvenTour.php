<html>

<head>
  <title>Title of the document</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="../AdvenTour/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-*********" crossorigin="anonymous" />

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="Section_top">
      <div class="content">
        <h1>AdvenTour.in <span style="font-size: large;font-weight: bold;">Adventure and Tourism !</span></h1>
      </div>
    </div>
    <div class="navbar">
      <a href="" class="disabled"></a><a href="" class="disabled"></a>
      <a href="Adventour.php" class="line">HOME</a>
      <a href="https://timesofindia.indiatimes.com/topic/tourism/news" class="line">NEWS</a>
      <a href="advice.html" class="line">TRAVEL ADVICE</a>
      <a href="" class="disabled" style="float: right;"></a><a href="" class="disabled" style="float: right;"></a>
      <a href="../AdvenTour/User/Login/login.html" style="float: right;" class="line">LOGIN</a>
      <a href="../AdvenTour/User/Login/signup.html" style="float: right;" class="line">SIGN UP</a>
    </div>
    <div class="parent">
    </div>
    <div class="text"><span class="escapes__title">AdvenTour</span>
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
        <img src="../AdvenTour/User/Images/delhi2.jpg" alt="" class="img">
        <img src="../AdvenTour/User/Images/mumbai1.jpg" alt="" class="img">
        <img src="../AdvenTour/User/Images/delhi12.jpg" alt="" class="img">
        <img src="../AdvenTour/User/Images/pune5.jpg" alt="" class="img">
        <hr>
      </p>
      <p class="escapes__title">Contact Us</p>
      <span style="font-size: 2vh;font-style: italic;">Want to Know more? Send us an Enquiry!</span>
      <span style="font-size:medium; font-weight: 700;">
        <ul style="list-style-type: none;margin-right: 82vh;">
          <li><i class='fas fa-map-pin'></i> Pune, Maharashtra</li>
          <li><i class='fas fa-phone-alt'></i> Phone:+91 9876543210</li>
          <li><i class='fas fa-envelope'></i> Email: adventour@mail.com</li>
        </ul>
        <ul style="list-style-type: none;margin-left: 82vh;margin-top: -15vh;">
          <li><input type="text" id="" placeholder="Name" name="fname"> <input type="email" id="" placeholder="Email"
              name=email></li>

          <li><input type="text" style="width: 40%; height: 2%;padding: 2vh;" placeholder="Message" name="message">
            <button type="submit" name="enquire">Enquire</button>
          </li>
        </ul>
      </span>
      <hr>

      <video src="User/Images/india.mp4" muted loop autoplay type="video/mp4" class="imgclass">
        <audio id="sound" src="User/Images/india.mp4"></audio></video>
      <a href="User/Login/login.html"><input type=button class="expbtn" value="EXPLORE" formaction=""></a>

      <hr>
      <footer style="font-size: medium;">
        <i class='fab fa-facebook-square'></i>
        <i class='fab fa-instagram'></i>
        <i class='fab fa-linkedin'></i>
        <p class="footer-text">Powered by <a href="" target="_blank">AdvenTour.in</a></p>
      </footer>


    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['enquire'])) {

  $Fname = $_POST['fname'];
  // $Lname = $_POST['lname'];
  $Email = $_POST['email'];
  $Message = $_POST['UserComments'];


  //Connect to the MySQL database
  require_once ('./User/Database/functions.php"');

  $conn = DBConnect();

  if (!empty($Fname) && !empty($Email) && !empty($Message)) {
    $INSERT = "INSERT INTO enquiries(Frist_name,Last_name,Email,UserComments) VALUES('$Fname','$Lname','$Email','$Message')";
    $result = $conn->query($INSERT);
    if ($result) {
      echo "<script> alert('Enquiry Sent Successfully.');
    window.location.href='AdvenTour.php';
    </script>";
    } else {
      echo "<script> alert('Please enter all the details.');
            window.location.href='AdvenTour.php';
            </script>";
    }
  }
}
?>