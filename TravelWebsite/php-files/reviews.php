


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

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
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

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        .reviews {
            margin-top: 20px;
        }

        .review {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
        }

        .review img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>User Reviews</h1>

        <form action="reviews-process.php" method="post" enctype="multipart/form-data">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="username" required>

            <label for="reviewText">Review:</label>
            <textarea id="reviewText" name="reviewText" rows="4" required></textarea>

            <label for="reviewImage">Upload Image:</label>
            <input type="file" id="reviewImage" name="reviewImage">

            <button type="submit" name = "submit" value="submit"=>Submit Review</button>
        </form>

        <div class="reviews">
            <!-- Display user reviews dynamically from PHP -->
            <!-- Example PHP code: -->

            <?php
// Assume $reviews is an array of reviews fetched from a database


   // Get and display reviews
//    $review = new Reviews();
//    $reviews = $review->saveReviews();

//    if (!empty($reviews)) {
//        foreach ($reviews as $review) {
//            echo '<div class="review">';
//            echo '<p>' . htmlspecialchars($review['username']) . '</p>';
//            echo '<p>' . htmlspecialchars($review['comment']) . '</p>';
//            echo '<img src="' . htmlspecialchars($review['img']) . '" alt="User Image">';
//            echo '</div>';
//        }
//    } else {
//        echo '<p>No reviews available.</p>';
//    }

?>
         
        </div>
    </div>

    

</body>
</html>
