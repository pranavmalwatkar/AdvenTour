<?php
if (isset($_POST["n1"])) {
    $uname = $_POST["uname"];
    $currentpass = $_POST["p1"];
    $newpass = $_POST["p2"];

    // Connect to the MariaDB server
    require_once "../Database/functions.php";

    $conn = DBConnect();
    if (!empty($uname) && !empty($currentpass) && !empty($newpass)) {
        $query = "SELECT * FROM users WHERE UserName='$uname' AND Password='$currentpass'";

        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {
            // Update the user's username and password'
            $sql = "UPDATE users SET Password='$newpass' WHERE Password='$currentpass' AND UserName='$uname' ";

            if ($conn->query($sql) === true) {
                echo "<script>alert('User record updated successfully');
                window.location.href='../Homepage/Profile/updateform.html';
                </script>";
            } else {
                echo "Error updating user record: " . $conn->error;
            }
        } else {
            echo "<script> alert('Invalid Input');
            window.location.href='../Homepage/Profile/updateform.html';
            </script>";
        }
    } else {
        echo "<script> alert('Incorrect input');
        window.location.href='../Homepage/Profile/updateform.html';
        </script>";
    }
    // Close the database connection
    $conn->close();
}
?>