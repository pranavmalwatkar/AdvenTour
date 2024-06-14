<!DOCTYPE html>
<html>

<head>
    <title>Update Password</title>
    <link rel="stylesheet" href="update_pass_css.css" type="text/css" />
</head>

<body>
    <h2 class="h2">Update Password</h2>
    <form action="update_password.php" method="post">
        <label for="new_password">New Password:</label>
        <input type="password" class="form-field animation a5" placeholder="Password" name="new_password" minlength="8"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" id="new_password" required
            title="Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character." />
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" class="form-field animation a5" placeholder="Password" name="confirm_password"
            minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{8,}" id="confirm_password" required
            title="Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character." />
        <input type="submit" name="submit" value="Update Password"></input>
        <button class="cancel" onclick="window.location.href = 'login.html';">
            Cancel
        </button>
    </form>
</body>

</html>
<?php
session_start();
$user_id = $_SESSION['id'];
//Connect to the MySQL database
require_once ('../Database/functions.php');

$conn = DBConnect();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted data
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validate the input
    if (empty($new_password) || empty($confirm_password)) {
        echo "Please fill in all fields.";
    } elseif ($new_password !== $confirm_password) {
        echo "Passwords do not match.";
    } else {
        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Prepare and execute the update query
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("si", $hashed_password, $user_id);
            if ($stmt->execute()) {
                echo "Password updated successfully.";
                echo "<script>
        alert('Password updated successfully.');
        window.location.href='login.html';        </script>";
            } else {
                echo "Error updating password: " . $conn->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    }
}
session_abort();
?>