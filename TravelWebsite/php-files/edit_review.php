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

// Check if the form is submitted for updating review
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["action"]) && $_POST["action"] === "updateReview") {
        $reviewId = $_POST["reviewId"];
        $newComment = $_POST["newComment"];

        // Update the review comment
        $updateCommentSql = "UPDATE reviews SET comment = '$newComment' WHERE id = $reviewId";
        mysqli_query($connection, $updateCommentSql);
        
        // Handle image upload if a new image is selected
        if (isset($_FILES['newImage']) && $_FILES['newImage']['error'] == 0) {
            $targetDir = "uploads/";  // Change this to the desired directory
            $targetFile = $targetDir . basename($_FILES['newImage']['name']);

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES['newImage']['tmp_name'], $targetFile)) {
                // Update the review image path
                $updateImageSql = "UPDATE reviews SET img = '$targetFile' WHERE id = $reviewId";
                mysqli_query($connection, $updateImageSql);
            }
        }

        // Redirect back to the reviews management dashboard
        header("Location: edit_review.p");
        exit();
    }
}

// Fetch review details based on the reviewId
if (isset($_GET["reviewId"])) {
    $reviewId = $_GET["reviewId"];
    $getReviewSql = "SELECT id, username, comment, img FROM reviews WHERE id = $reviewId";
    $reviewResult = mysqli_query($connection, $getReviewSql);
    $review = mysqli_fetch_assoc($reviewResult);
} else {
    // If no reviewId is provided, redirect to the reviews management dashboard
    header("Location: edi");
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

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-top: 10px;
        }

        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="file"] {
            margin-top: 10px;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Edit Review</h2>

        <form action="edit_review.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="reviewId" value="<?php echo $review['id']; ?>">

            <label for="newComment">Edit Comment:</label>
            <textarea id="newComment" name="newComment" rows="4" required><?php echo $review['comment']; ?></textarea>

            <label for="newImage">Change Image:</label>
            <input type="file" id="newImage" name="newImage">

            <button type="submit" name="action" value="updateReview">Update Review</button>
        </form>
    </div>

</body>
</html>
