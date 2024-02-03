<?php
// Start the session (assuming you are using sessions to track user authentication)

// Connect to the database (replace with your credentials)
$host = "localhost";
$user = "root";
$password = "";
$database = "register";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch all reviews from the 'reviews' table
$reviewsSql = "SELECT id, username, comment, img FROM reviews";
$reviewsResult = mysqli_query($connection, $reviewsSql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews Management Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        .edit-btn, .delete-btn {
            padding: 8px;
            margin: 5px;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #3498db;
            color: #fff;
        }

        .delete-btn {
            background-color: #e74c3c;
            color: #fff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Reviews Management Dashboard</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Comment</th>
                <th>Image</th>
                <th>Action</th>
            </tr>

            <?php
            // Display reviews in a table
            while ($row = mysqli_fetch_assoc($reviewsResult)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['username'] . '</td>';
                echo '<td>' . $row['comment'] . '</td>';
                echo '<td><img src="' . $row['img'] . '" alt="Review Image" style="max-width: 100px;"></td>';
                echo '<td>';
                echo '<form method="post" action="edit_review.php">';
                echo '<input type="hidden" name="reviewId" value="' . $row['id'] . '">';
                echo '<button type="submit" class="edit-btn">Edit</button>';
                echo '</form>';
                echo '<form method="post" action="' . $_SERVER["PHP_SELF"] . '">';
                echo '<input type="hidden" name="action" value="deleteReview">';
                echo '<input type="hidden" name="reviewId" value="' . $row['id'] . '">';
                echo '<button type="submit" class="delete-btn">Delete</button>';
                echo '</form>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>

</body>
</html>
