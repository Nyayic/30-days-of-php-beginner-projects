<?php 
// connect to database
$connect = new mysqli("localhost","root","","blog");
// check connection
if($connect->connect_error){
    die("Connection Failed" .$connect->connect_error);
}
// Retrieve posts from database
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $connect->query($sql);
// display the blog posts
while($row=$result->fetch_assoc()){
    echo "<h2>".$row["title"]."</h2>";
    echo "<p>".$row["content"]."</p>";
    echo"<hr>";
}
// close the database connection
$connect->close();
?>