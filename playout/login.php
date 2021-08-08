<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/stlogin.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form method="POST" class="box">
                        <h1>Login</h1>
                        <p class="text-muted"> Please enter your login and password!</p>
                        <input type="text" name="name" placeholder="Username">
                        <input type="password" name="password" placeholder="Password">
                        <a class="forgot text-muted" href="#">Forgot password?</a>
                        <input type="submit" name="submit" value="Login" href="#">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $name = $_POST["name"];
        $password = $_POST["password"];
        if ($name == 'admin' && $password == '123456') {
            header('location: index.php');
        } else {
            echo '<script>alert("Welcome to Geeks for Geeks")</script>';
            header('location: login.php');
        }
    }

    ?>
</body>

</html>