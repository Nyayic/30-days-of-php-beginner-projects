<?php 
include('./config/db.php');

$id = $_GET['id'];
$sql = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title><?= $row['title'] ?></title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-8"><?= $row['title'] ?></h1>
            <p class="text-gray-700"><?= $row['content'] ?></p>
        </div>
    </body>
</html>