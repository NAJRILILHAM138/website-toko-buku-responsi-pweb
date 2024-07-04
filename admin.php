<?php
$orders = file('orders.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Book Haven - Admin</h1>
    </header>
    <main>
        <h2>Order List</h2>
        <ul>
            <?php foreach ($orders as $order): ?>
                <li><?php echo $order; ?></li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>
        <p>&copy; 2024 Book Haven</p>
    </footer>
</body>
</html>
