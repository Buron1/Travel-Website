<?php

class Reviews {
    private $link;

    public function __construct() {
        $this->link = mysqli_connect("localhost", "root", "", "register");

        if (!$this->link) {
            die(mysqli_connect_error());
        }
    }

    public function saveReview($username, $reviewText, $reviewImage) {
        // Validate file upload
        if (!empty($username) && !empty($reviewText) && isset($_FILES['reviewImage']) && $_FILES['reviewImage']['error'] == 0) {
            // Move the uploaded file to a specific directory
            $targetDir = "uploads/";  // Change this to the desired directory
            $targetFile = $targetDir . basename($_FILES['reviewImage']['name']);

            if (move_uploaded_file($_FILES['reviewImage']['tmp_name'], $targetFile)) {
                // File moved successfully, now insert into the database
                $sql = "INSERT INTO reviews (username, comment, img) VALUES ('$username', '$reviewText', '$targetFile')";

                if (mysqli_query($this->link, $sql)) {
                    echo "Record inserted successfully";
                    header("Location: reviews-display.php");
                   
                    exit(); // Ensure script stops execution after redirection
                } else {
                    echo "Record insert went wrong: " . mysqli_error($this->link);
                }
            } else {
                echo "File upload failed.";
            }
        } else {
            echo "Please provide all information, including a valid image.";
        }
    }

    public function __destruct() {
        mysqli_close($this->link);
    }
}

// Check if the form is submitted
if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $reviewText = $_POST["reviewText"];
    
    $review = new Reviews();
    $review->saveReview($username, $reviewText, $_FILES['reviewImage']);
}

?>
