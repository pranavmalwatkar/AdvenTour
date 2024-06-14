<html>

<head>
  <link rel="stylesheet" href="admin.css">
</head>

<body>
  <form>
    <?php
    //Connect to the MySQL database
    require_once('function.php');
    $conn = DBConnect1();
    $result = display_payment();
    ?>
    <div class="area">
      <div class="boxes">
        <span>User Payment Details</span>
      </div>
      <nav class="main-menu">
        <ul>
          <li>
            <a href="admin.html">
              <i class="fa fa-home fa-2x"></i>
              <span class="nav-text">
                Home
              </span>
            </a>

          </li>
          <li class="has-subnav">
            <a href="destination.php">
              <i class="fa fa-globe fa-2x"></i>
              <span class="nav-text">
                Destinations
              </span>
            </a>

          </li>
          <li class="has-subnav">
            <a href="adminenquiry.php">
              <i class="fa fa-comments fa-2x"></i>
              <span class="nav-text">
                Enquiries
              </span>
            </a>

          </li>
          <li class="has-subnav">
            <a href="userdetails.php">
              <i class="fa fa-user fa-2x"></i>
              <span class="nav-text">
                User Details
              </span>
            </a>

          </li>
          <li>
            <a href="adminbooking.php">
              <i class="fa fa-plane fa-2x"></i>
              <span class="nav-text">
                Booking Details
              </span>
            </a>
          </li>
          <li>
            <a href="userpayment.php">
              <i class="fa fa-credit-card"></i>
              <span class="nav-text">
                User Payments
              </span>
            </a>
          </li>
        </ul>

        <ul class="logout">
          <li>
            <a href="../User/Login/login.html">
              <i class="fa fa-power-off fa-2x"></i>
              <span class="nav-text">
                Logout
              </span>
            </a>
          </li>
        </ul>
      </nav>



      <table border="3" width="80%" align="center" class="customers">
        <tr>

          <th>PaymentID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Zip</th>
          <th>Card Name</th>
          <th>Card Number</th>
          <th>Expmonth</th>
          <th>Expyear</th>
          <th>Cvv</th>
        </tr>

        <tr>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
             <td align="center">
              <?php echo $row['id']; ?>
            </td>
            <td align="center">
              <?php echo $row['Full_Name']; ?>
            </td>
            <td align="center">
              <?php echo $row['Email']; ?>
            </td>
            <td align="center">
              <?php echo $row['Address']; ?>
            </td>
            <td align="center">
              <?php echo $row['City']; ?>
            </td>
            <td align="center">
              <?php echo $row['State']; ?>
            </td>
            <td align="center">
              <?php echo $row['Zip']; ?>
            </td>
            <td align="center">
              <?php echo $row['Card_Name']; ?>
            </td>
            <td align="center">
              <?php echo $row['Card_Number']; ?>
            </td>
            <td align="center">
              <?php echo $row['Expmonth']; ?>
            </td>
            <td align="center">
              <?php echo $row['Expyear']; ?>
            </td>
            <td align="center">
              <?php echo $row['Cvv']; ?>
            </td>
          </tr>
          <?php
          }
          ?>
      </table>
      <?php
      ?>
    </div>
</body>

</html>