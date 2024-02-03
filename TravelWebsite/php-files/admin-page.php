<!-- edhe qeta me ndreq me bo qat admin panel(dashboard) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            background-color:blue;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px;
            display: inline-block;
        }

        nav a:hover {
            background-color: #555;
        }

        .container {
            display: flex;
        }

        aside {
            width: 200px;
            background-color: #555;
            color: #fff;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        main {
            flex: 1;
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Admin Panel</h1>
    </header>

    <nav>
        <a href="#">Dashboard</a>
        <a href="#">Users</a>
        <a href="#">Products</a>
        <a href="#">Settings</a>
    </nav>

    <div class="container">
        <aside>
            <h2>Sidebar</h2>
            <!-- Add more sidebar content as needed -->
        </aside>

        <main>
            <h2>Main Content</h2>
            <!-- Add your admin panel content here -->
        </main>
    </div>

    <footer>
        <p>&copy; 2024 Admin Panel</p>
    </footer>

</body>
</html>
