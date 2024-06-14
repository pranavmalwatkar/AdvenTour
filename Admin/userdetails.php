<html>

<head>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <?php
    //Connect to the MySQL database
    require_once ('function.php');

    // $email = GetSessionVar1('email');
    $conn = DBConnect1();
    $result = display_users();
    ?>
    <div class="area">
        <div class="boxes">
            <span>User Details</span>
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

        <table border="3" width="100%" height="100" align="center" class="customers">
            <tr align="center">
                <th>U_ID</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Security Question 1</th>
                <th>Security Question 2</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <tr align="center">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <td align="center">
                        <?php echo $row['ID']; ?>
                    </td>
                    <td align="center">
                        <?php echo $row['UserName']; ?>
                    </td>
                    <td align="center">
                        <?php echo $row['Email']; ?>
                    </td>
                    
                    <td align="center">
                        <?php echo $row['question1']; ?>
                    </td>
                    <td align="center">
                        <?php echo $row['question2']; ?>
                    </td>
                    <td align="center">
                        <a href="edit_user.php?ID=<?php echo $row['ID']; ?>"style="color:black" >Edit
                        </a>
                    </td>
                    <td align="center">
                        <!-- Add a Delete button linking to the delete.php page -->
                        <a href="delete.php?ID=<?php echo $row['ID']; ?>" 
                            onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
    </div>
    </table>
</body>

</html>