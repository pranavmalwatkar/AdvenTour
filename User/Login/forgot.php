<?php
if (isset($_POST['n1'])) {
    $uname = $_POST['uname'];
    $question1 = $_POST['q1'];
    $question2 = $_POST['q2'];

    //Connect to the MySQL database
    require_once ('../Database/functions.php');

    $conn = DBConnect();
    if (
        !empty($uname) && !empty($question1) && !empty($question2)
    ) {
        if (mysqli_connect_error()) {
            die('Connect Error(' . mysqli_connect_error() . ')' . mysqli_connect_error());
        } else {
            $SELECT = "SELECT ID,UserName, Password, question1,question2 From users Where UserName=? Limit 1";
        }
        //prepare statement
        $stmt = $conn->prepare($SELECT);

        // Assuming $uid, $question1, and $question2 are user input values
        $stmt->bind_param("s", $uname);
        $stmt->execute();
        $stmt->bind_result($id, $result_username, $result_Password, $result_question1, $result_question2);
        $stmt->fetch();
        session_start();
        $_SESSION['id'] = $id;
        session_write_close(); // Save session data and close the session
        if ($result_username == $uname && $result_question1 == $question1 && $result_question2 == $question2) {
            // User input matches with the bound variables
            // Perform some action here
            // echo "Your Password:  ". $result_Password;
            echo "<script>           
            alert('Create Your New Password');
            window.location.href='../Login/update_password.php';
            </script>";
        } else {
            // User input does not match with the bound variables
            // Perform some error handling here
            // echo "invalid input";
            echo "<script>
            alert('Invalid Input.');
            window.location.href='../Login/forgot.html';
            </script>";
        }
        $stmt->close();
        $conn->close();
    } else {
        echo "<script>
        alert('Invalid Input.');
        window.location.href='../Login/forgot.html';
        </script>";
    }
}