<?php

//Connect to the MySQL database
require_once ('function.php');

$conn = DBConnect1();
// Check if the user id is provided in the URL
if (isset($_GET['id'])) {
    $enq_id = $_GET['id'];

    // Fetch user details based on user id
    $query = "SELECT * FROM enquiries WHERE id = $enq_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $enq = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        exit;
    }
} else {
    echo "enquiry not provided.";
    exit;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Fname = $_POST['First_name'];
    $Lname = $_POST['Last_name'];
    $Email = $_POST['Email'];
    $Message = $_POST['UserComments'];

    $update_query = "UPDATE enquiries SET First_name='$Fname', Last_name ='$Lname', Email ='$Email', UserComments='$Message' WHERE id = $enq_id";
    $update_result = mysqli_query($conn, $update_query);
// Prepare the update statement

    if ($update_result) {
        echo "<script>
            alert('Data Updated Successfully');
            window.location.href='#';
            </script>";
    } else {
        echo "<script>
            alert('Error updating Information.');
            window.location.href='#';
            </script>" . mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Enquiry</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Finger+Paint&family=Pangolin&family=Rubik+Puddles&family=Ubuntu:wght@600&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Quicksand&display=swap");
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Condensed&display=swap');

        html {
            scroll-behavior: smooth;
        }

        * {
            padding: 0;
            text-align: left;
        }

        body {
            background-color: whitesmoke;
            margin: 0;
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto Condensed', sans-serif;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        h2 {
            text-align: center;
            font-size: xx-large;
        }

        input,
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"],
        button {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            text-align: center;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        input:required {
            border-color: #e74c3c;
        }

        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }
    </style>
</head>

<body>
    <button style="float:left; max-width:100px" onclick="window.location.href='adminenquiry.php'">Back</button>
    <h2>Edit Enquiry</h2>


    <form method="post" action="">
        <label for="First_name">First Name:</label>
        <input type="text" name="First_name" value="<?php echo $enq['First_name']; ?>" required><br>

        <label for="Last_name">Last Name:</label>
        <input type="text" name="Last_name" value="<?php echo $enq['Last_name']; ?>" required><br>

        <label for="Email">Email:</label>
        <input type="email" name="Email" value="<?php echo $enq['Email']; ?>" required><br>

        <label for="UserComments">Message:</label>
        <textarea name="UserComments" required><?php echo $enq['UserComments']; ?></textarea><br>


        <input type="submit" value="Update">
    </form>
</body>

</html>