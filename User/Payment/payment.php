<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="./payment.css" type="text/css" />
</head>

<body>

  <h2>PAYMENT GATEWAY</h2>
  <div class="row">
    <div class="col-75">
      <div class="container">
        <form method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> '>

          <div class="row">
            <div class="col-50">
              <h3>Billing Address</h3>
              <label for="fname"><i class="fa fa-user"></i> Full Name</label>
              <input type="text" id="fname" name="fullname" placeholder="Enter Your Name" required>
              <label for="email"><i class="fa fa-envelope"></i> Email</label>
              <input type="text" id="email" name="email" placeholder="Enter Your Email" pattern="[a-zA-Z0-9._%+-]+@gmail\.com" required >
              <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
              <input type="text" id="adr" name="address" placeholder="Enter Your Address" required>
              <label for="city"><i class="fa fa-institution"></i> City</label>
              <input type="text" id="city" name="city" placeholder="City" required>

              <div class="row">
                <div class="col-50">
                  <label for="state">State</label>
                  <input type="text" id="state" name="state" placeholder="State" required>
                </div>
                <div class="col-50">
                  <label for="zip">Pincode</label>
                  <input type="text" id="zip" name="zip" placeholder="Pincode" required pattern="[0-9]{6}">
                </div>
              </div>
            </div>

            <div class="col-50">
              <h3>Payment</h3>
              <label for="fname">Accepted Cards</label>
              <div class="icon-container">
                <i class="fa fa-cc-visa" style="color:navy;"></i>
                <i class="fa fa-cc-amex" style="color:blue;"></i>
                <i class="fa fa-cc-mastercard" style="color:red;"></i>
                <i class="fa fa-cc-discover" style="color:orange;"></i>
              </div>
              <label for="cname">Name on Card</label>
              <input type="text" id="cname" name="cardname" placeholder="Name On Card" required>
              <label for="ccnum">Card number</label>
              <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required pattern="[0-9]{16}">
              <label for="expmonth">Exp Month</label>
              <input type="text" id="expmonth" name="expmonth" placeholder="Expiry Month" required> 
              <div class="row">
                <div class="col-50">
                  <label for="expyear">Exp Year</label>
                  <input type="text" id="expyear" name="expyear" placeholder="Expiry Year" required pattern="[0-9]{4}">
                </div>
                <div class="col-50">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="CVV" required pattern="[0-9]{3}">
                </div>
              </div>
            </div>

          </div>
          <label>
            <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
          </label>
          <input type="submit" value="Proceed To Pay" class="btn" name="pay">
        </form>
      </div>
    </div>
  </div>

</body>

</html>

<?php
if (isset($_POST['pay'])) {

  $fullname = $_POST['fullname'];
  $Email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  $cardname = $_POST['cardname'];
  $cardnumber = $_POST['cardnumber'];
  $expmonth = $_POST['expmonth'];
  $expyear = $_POST['expyear'];
  $cvv = $_POST['cvv'];


  //Connect to the MySQL database
  require_once('../Database/functions.php');

  $conn = DBConnect();

  if (
    !empty($fullname) && !empty($Email) && !empty($address) && !empty($city) && !empty($state) && !empty($zip)
    && !empty($cardname) && !empty($cardnumber) && !empty($expmonth) && !empty($expyear) && !empty($cvv)
  ) {
    $INSERT = "INSERT Into payment(Full_Name,Email,Address,City,State,Zip,Card_Name,Card_Number,Expmonth,Expyear,Cvv) values(?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("sssssisiiii", $fullname, $Email, $address, $city, $state, $zip, $cardname, $cardnumber, $expmonth, $expyear, $cvv);
    $stmt->execute();
    header("Location: processing.php");
  } 
  // else {
  //   echo "<script> alert('Please enter all the details.');
  //           window.location.href='payment.php';
  //           </script>";
  // }
}
?>