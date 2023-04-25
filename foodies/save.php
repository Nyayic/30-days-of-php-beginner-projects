<?php
include('./config/db.php');
$title = $_POST['title'];
$content= $_POST['content'];
$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
mysqli_query($connect, $sql);
header('Location: index.php');