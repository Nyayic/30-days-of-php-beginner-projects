<?php
include('./config/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://tailwindcss.com/assets/tailwind.css">
</head>
<body>
<div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">New Post</h1>
        <form method="POST" action="save.php">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="title">Title</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="Enter a title">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="body">Body</label>
                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="body" name="body" placeholder="Enter a body"></textarea>
            </div>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">Save</button>
        </form>
    </div>
</body>
</html>