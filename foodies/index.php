<?php 
include('./config/db.php');
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = mysqli_query($connect, $sql);
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>foodies</title>
        <link rel="stylesheet" href="https://tailwindcss.com/assets/tailwind.css">
    </head>
    <body>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-8">foodies</h1>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                <div class="bg-white rounded-lg shadow p-6 mb-8">
                    <h2 class="text-2xl font-bold mb-4"><?= $row['title'] ?></h2>
                    <p class="text-gray-700"><?= $row['content'] ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    </body>
</html>