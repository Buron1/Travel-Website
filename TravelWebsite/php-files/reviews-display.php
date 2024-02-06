<?php
session_start();

// Establish a MySQLi connection (replace with your actual credentials)
$host = "localhost";
$user = "root";
$password = "";
$database = "register";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM reviews";
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
            max-width: 500px;
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
        .review-button {
        margin:10px;
        
        }
        .button-container {
            width:100%;
            display:flex;
            justify-content:center;
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
            echo '<div class="review">';
            echo '<p class="username">' . htmlspecialchars($row['username']) . '</p>';
            echo '<div class="comment-container">';
            echo '<p class="comment">' . htmlspecialchars($row['comment']) . '</p>';
            echo '</div>';
            echo '<img src="' . htmlspecialchars($row['img']) . '" alt="User Image">';

            if (isset($_SESSION['userid'])) {
                if ($_SESSION['role'] == 1) {
                  
                    echo '<div class="button-container">';
                    echo '<form method="post" action="dashboard.php">';
                    echo '<input type="hidden" name="review_id" value="' . $row['id'] . '">';
                    echo '<button type="submit" class="review-button">Edit</button>';
                    echo '</form>';
                    echo '<form method="post" action="dashboard.php">';
                    echo '<input type="hidden" name="review_id" value="' . $row['id'] . '">';
                    echo '<button type="submit" class="review-button" style="background-color:#CE2029">Delete</button>';
                    echo '</form>';
                    echo '</div>';
                }
            }
            
            echo '</div>';
        }
        ?>

    </div>

    <?php
   

    require 'footer.php';
    ?>
</html>
