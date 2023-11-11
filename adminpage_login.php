<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adminpage</title>
</head>
<body>
    <div class="adminpage">
        <h1>Login to adminpage</h1>
        <form action="adminpage.php" method="POST">
            <label for="username">Username</label> <br>
            <input type="text" name="username"> <br><br>
            <label for="Password">Password</label> <br>
            <input type="password" name="password"> <br><br>
            <input type="submit" value="Login">
        </form>
        <a href="index.php">Go back</a>
    </div>
</body>
</html>