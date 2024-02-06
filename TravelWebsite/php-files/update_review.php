<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header("Location: reviews.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Establish a MySQLi connection (replace with your actual credentials)
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "register";

    $connection = mysqli_connect($host, $user, $password, $database);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get data from the form
    $review_id = $_POST['review_id'];
    $new_comment = $_POST['comment'];
    $new_img = $_POST['img'];

    // Update the review in the database
    $updateSql = "UPDATE reviews SET comment = '$new_comment', img = '$new_img' WHERE id = $review_id";

    if (mysqli_query($connection, $updateSql)) {
        echo "Review updated successfully.";
    } else {
        echo "Error updating review: " . mysqli_error($connection);
    }

    // Close the database connection
    mysqli_close($connection);
} else {
    // Redirect if accessed without POST request
    header("Location: reviews.php");
    exit();
}
?>
