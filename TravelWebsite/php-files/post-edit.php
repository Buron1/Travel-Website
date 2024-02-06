<?php
session_start();

// Check if the user is logged in and is an admin
if (!isset($_SESSION['isAdmin']) || !$_SESSION['isAdmin']) {
    header("Location: reviews.php");
    exit();
}

// Establish a MySQLi connection (replace with your actual credentials)
$host = "localhost";
$user = "root";
$password = "";
$database = "register";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch review data based on review_id
if (isset($_GET['id'])) {
    $review_id = isset($_GET['id']) ? $_GET['id'] : null;

if ($review_id !== null) {
    $sql = "SELECT id, username, comment, img FROM reviews WHERE id = $review_id";
    $result = mysqli_query($connection, $sql);

    // Check if the result is not empty
    if ($result && $row = mysqli_fetch_assoc($result)) {
        $review = $row;
    } else {
        // Handle the case where the review is not found
        echo "Review not found.";
        // Optionally, redirect or perform some other action
        exit();
    }

    // Close the result set
    mysqli_free_result($result);
} else {
    // Handle the case where review_id is not provided
    echo "Review ID not provided.";
    // Optionally, redirect or perform some other action
    exit();
}

} else {
    // Redirect if review_id is not provided
    header("Location: reviews.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Review</title>
    <style>
        /* Add your styles for the edit page here */
    </style>
</head>
<body>
    <h2>Edit Review</h2>
    <form method="post" action="update_review.php">
        <input type="hidden" name="review_id" value="<?php echo $review['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $review['username']; ?>" readonly><br>
        <label for="comment">Comment:</label>
        <textarea name="comment"><?php echo $review['comment']; ?></textarea><br>
        <label for="img">Image URL:</label>
        <input type="text" name="img" value="<?php echo $review['img']; ?>"><br>
        <button type="submit" class="review-button">Update Review</button>
    </form>
</body>
</html>

<?php
// Close the database connection
mysqli_close($connection);
?>
