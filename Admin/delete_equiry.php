<?php
  //Connect to the MySQL database
  require_once ('function.php');

  // $email = GetSessionVar1('email');
  $conn = DBConnect1();
  $result = display_enquiries();

// Check if the "Delete" button is clicked
if (isset($_GET['id'])) {
    // Get user ID from the URL parameter
    $user_id = $_GET['id'];

    // Delete user from the database
    $delete_query = "DELETE FROM enquiries WHERE id = $user_id";
    $delete_result = mysqli_query($conn, $delete_query);

    if ($delete_result) {
        echo "User deleted successfully.";
        // Redirect back to the user list page after deletion
        header("Location: adminenquiry.php");
        exit;
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "User ID not provided.";
}

?>
