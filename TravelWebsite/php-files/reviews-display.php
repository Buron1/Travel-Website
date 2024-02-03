<?php
// Establish a MySQLi connection (replace with your actual credentials)
$host = "localhost";
$user = "root";
$password = "";
$database = "register";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the 'reviews' table
$sql = "SELECT username, comment, img FROM reviews";
$result = mysqli_query($connection, $sql);

require 'navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Reviews</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .reviews-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display:flex;
            flex-flow:row wrap;
            justify-content:center;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .review {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
            
        }
      
        .username {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .comment {
            margin-bottom: 10px;
        }

        .review img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .comment-container {
            width:30%;
        }
        button {
    background-color: #3498db;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    

}
a {
    text-decoration:none;
    color:white;
}
    </style>
</head>
<body>

    <div class="reviews-container">
        <h2>User Reviews</h2>
        <div style="width:100%;display:flex; justify-content:center; margin: 20px 0;">
        <button><a href="reviews.php">Leave A Review</a></button>
</div>
        

        <?php
        // Display reviews dynamically
        while ($row = mysqli_fetch_assoc($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="review">';
                
                echo '<p class="username">' . htmlspecialchars($row['username']) . '</p>';
                echo '<div class="comment-container">';  // Add a new div container for the comment
                echo '<p class="comment">' . htmlspecialchars($row['comment']) . '</p>';
                echo '</div>';
                echo '<img src="' . htmlspecialchars($row['img']) . '" alt="User Image">';
                echo '</div>';
            }
            
        }

        // Close the result set
        mysqli_free_result($result);

        // Close the database connection
        mysqli_close($connection);
        ?>
    </div>
<?php
require 'footer.php'
?>
</body>
</html>
