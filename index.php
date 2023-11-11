<?php 
include "db_connection.php";

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
