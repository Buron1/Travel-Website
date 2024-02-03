<?php
include 'navbar.php';
$host = "localhost";
$user = "root";
$password = "";
$database = "register";

$connection = mysqli_connect($host, $user, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT id, name, email,role FROM users";
$result = mysqli_query($connection, $sql);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['action']) && isset($_POST['userId'])) {
        $action = $_POST['action'];
        $userId = $_POST['userId'];

        switch ($action) {
            case 'makeAdmin':
                makeUserAdmin($connection, $userId);
                break;
            case 'deleteUser':
                deleteUser($connection, $userId);
                break;
            default:
                // Invalid action
                break;
        }
    }
}

function makeUserAdmin($connection, $userId) {
    // Perform logic to make the user an admin
    $updateSql = "UPDATE users SET role = 1 WHERE id = $userId";
    mysqli_query($connection, $updateSql);
}

function deleteUser($connection, $userId) {
    // Perform logic to delete the user
    $deleteSql = "DELETE FROM users WHERE id = $userId";
    mysqli_query($connection, $deleteSql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management Dashboard</title>
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

        .admin-btn, .delete-btn {
            padding: 8px;
            margin: 5px;
            cursor: pointer;
        }

        .admin-btn {
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
        <h2>User Management Dashboard</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Admin</th>
                <th>Action</th>
            </tr>

            <?php
            // Display users in a table
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['name'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . ($row['role'] == 1 ? 'Yes' : 'No') . '</td>';
                echo '<td>';
                echo '<form method="post">';
                echo '<input type="hidden" name="action" value="makeAdmin">';
                echo '<input type="hidden" name="userId" value="' . $row['id'] . '">';
                echo '<button type="submit" class="admin-btn">Make Admin</button>';
                echo '</form>';
                echo '<form method="post">';
                echo '<input type="hidden" name="action" value="deleteUser">';
                echo '<input type="hidden" name="userId" value="' . $row['id'] . '">';
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