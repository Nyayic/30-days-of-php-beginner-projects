<?php
// Define the function to display tasks
function displayTasks() {
  // Open the tasks.txt file and read the contents into an array
  $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);

  // If there are tasks in the file, display them in an unordered list
  if (!empty($tasks)) {
    echo '<ul>';
    foreach ($tasks as $task) {
      echo '<li>' . htmlspecialchars($task) . '</li>';
    }
    echo '</ul>';
  } else {
    echo 'No tasks found.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>To-Do List</title>
</head>
<body>
  <h1>To-Do List</h1>
  <?php
  // If the form has been submitted, add the new task to the file
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTask = $_POST['task'];

    if (!empty($newTask)) {
      $fh = fopen('tasks.txt', 'a');
      fwrite($fh, $newTask . PHP_EOL);
      fclose($fh);
    }
    // Redirect back to the same page to prevent form resubmission
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
  }
  ?>

  <h2>Add a Task</h2>
  <form method="post">
    <label for="task">Task:</label>
    <input type="text" id="task" name="task">
    <button type="submit">Add Task</button>
  </form>

  <h2>Tasks</h2>
  <?php
  // Display the current list of tasks
  displayTasks();
  ?>
</body>
</html>
