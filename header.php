<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
    <script src="https://kit.fontawesome.com/9ad9a54963.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
        </ul>
        <ul>
            <li><a href="view.php">View Messages</a></li>
            <?php session_start(); if(isset($_SESSION['user'])): ?>
            <li><a href="logout.php"><?php echo $_SESSION['user']['name']; ?> (Logout)</a></li>
            <?php else: ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
            <?php endif; ?>
        </ul>


    </nav>