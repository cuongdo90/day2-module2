<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/layuot.css">
</head>
<body>
<div class="container">
    <div class="header">
        <p>Header</p>
    </div>

    <div class="topnav">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div>

    <div class="content">
        <!-- Nội dung chính sẽ đặt vào đây -->
        <article><?php include "conten.php"; ?></article>
    </div>

    <div class="footer">
        <p>Footer</p>
    </div>
</div>

</body>
</html>#22a122