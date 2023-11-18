<?php
include "db_connection.php";

session_start();

if (!$_SESSION['logged_in']) {
    header("Location: adminpage_login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "exvoid_web");

if (!$conn) {
    exit("Failed to connect to the database");
}

$title = $_GET['title']);
$content = $_GET['content'];
$author = $_SESSION['username'];

$query = "SELECT id FROM users WHERE username = '$author'";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $author_id = $row['id'];

    if (!empty($title) && !empty($content)) {
        $query = "INSERT INTO announcements (title, content, author_id) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ssi", $title, $content, $author_id);
            mysqli_stmt_execute($stmt);
        }
    }
}

mysqli_close($conn);

header("Location: index.php");
exit();

?>
