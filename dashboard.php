<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: register_login.php");
    exit();
}
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - DecorNest</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #01053d, #5f72bd);
            color: #fff;
            font-family: 'Segoe UI', sans-serif;
            height: 100vh;
            margin: 0;
        }

        .dashboard-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card-box {
            background-color: #ffffff;
            color: #01053d;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .btn-logout {
            background-color: #ff4d4d;
            border: none;
            font-weight: bold;
        }

        .btn-logout:hover {
            background-color: #cc0000;
        }

        h2 {
            font-weight: 700;
        }
    </style>
</head>
<body>

<div class="dashboard-container">
    <div class="card-box">
        <h2>Welcome, <?php echo htmlspecialchars($user); ?>!</h2>
        <p>You have successfully logged in to your DecorNest dashboard.</p>
        <a href="User/logout.php" class="btn btn-logout mt-3">Logout</a>
    </div>
</div>
</body>
</html>
