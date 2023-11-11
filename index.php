<?php 
include "db_connection.php";

function getUsernameById($user_id, $conn) {
    $query = "SELECT username FROM users WHERE id = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $user_id);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['username'];
        }
    }

    return "unknown";
}

$query = "SELECT a.*, u.username AS author
          FROM announcements a
          LEFT JOIN users u ON a.author_id = u.id
          ORDER BY a.id DESC LIMIT 10";

$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>News</title>
</head>
<body>
    <section class="news">
        <h1>News</h1>
        <?php while ($row = mysqli_fetch_array($result)) : ?>
            <?php
                $title = $row['title'];
                $content = $row['content'];
                $author = $row['author'];
            ?>

            <fieldset class='announcement'>
                <legend><?= $title ?></legend>
                <article>
                    <p><?= str_replace("\n", "<br>", $content) ?></p>
                    <span class='author'>Posted by <?= $author ?></span>
                </article>
            </fieldset>
        <?php endwhile; ?>
        <a href="adminpage_login.php">Go to adminpage</a>
    </section>
</body>
</html>