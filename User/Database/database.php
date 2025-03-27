<?php
// Check if the login form was submitted

if (isset($_POST["login"])) {
    // Get the username and password from the form
    $UserName = $_POST["u"];
    $loginPwd = $_POST["p"];

    // Connect to the database
    require_once "../Database/functions.php";

    $conn = DBConnect();

    if (!empty($UserName) && !empty($loginPwd)) {

        // Prepare a statement to fetch the hashed password from the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE UserName = ?");
        $stmt->bind_param("s", $UserName);
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if the query was successful
        if ($result && $result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['Password'];
            $IsAdmin = $row["IsAdmin"];
            // Start the session
            session_start();

            // Create a session object
            $sessionObject = new stdClass();
            $sessionObject->name = $UserName;
            $sessionObject->email = $row["Email"];
            $sessionObject->isAdmin = $IsAdmin; // Corrected variable case
            $sessionObject->pwd = $loginPwd;

            // Save the session object
            $_SESSION["mySessionObject"] = $sessionObject;

            // Verify the entered password against the hashed password
            if (password_verify($loginPwd, $hashedPassword)) { // Ensure password_verify is used correctly
                // Redirect based on the user's role
                if ($IsAdmin) {
                    header("Location: ../../Admin/admin.html"); // Redirect to admin page
                } else {
                    header("Location: ../Homepage/homepage.php"); // Redirect to homepage
                }
                exit(); // Ensure the script stops after redirect
            } else {
                // Invalid password
                echo "<script> 
                    alert('Invalid Password');
                    window.location.href='../Login/login.html';
                </script>";
            }
        } else {
            // User doesn't exist
            echo "<script> 
                alert('Invalid Username !');
                window.location.href='../Login/login.html';
            </script>";
        }
        $stmt->close();
    } else {
        echo "<script> 
            alert('Invalid input!');
            window.location.href='../Login/login.html';
        </script>";
    }

    $conn->close();
}
?>