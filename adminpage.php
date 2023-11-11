<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    // Pre-defined users and passwords
    // Normally it would be stored in the database
    $users = array(
        "ErPiX"     => password_hash("FunkyPassword", PASSWORD_BCRYPT),
        "Matou0014" => password_hash("SussyPassword", PASSWORD_BCRYPT)
    );

    $username = trim(htmlspecialchars($_POST['username']));
    $password = htmlspecialchars($_POST['password']);

    // Check if there's such a user and check their password
    if (array_key_exists($username, $users) && password_verify($password, $users[$username])) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
    } 
    else {
        header("Location: adminpage_login.php");
        exit();
    }
}

else if (!$_SESSION['logged_in']) {
    header("Location: adminpage_login.php");
    exit();
}
?>

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
        <h1>Post an annoucement </h1>
        <p>You are logged as <?php echo $username ?></p>
        <form action="post_annoucement.php">
            <label for="title">Title</label> <br>
            <input type="text" name="title"> <br><br>
            <label for="content">Content</label> <br>
            <textarea name="content" cols="30" rows="10"></textarea> <br><br>
            <input type="submit" value="Post an annoucement">
        </form>
        <a href="index.php">Go back</a>
    </div>
</body>
</html>