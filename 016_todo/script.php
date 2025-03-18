<?php
$arr = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['action'] == 'add') {
        $task = $_POST['task'];
        array_push($arr, $task);
    } elseif ($_POST['action'] == 'delete') {
        $task = $_POST['task'];
        if (($key = array_search($task, $arr)) !== false) {
            unset($arr[$key]);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-do List</h1>
    <form action="" method="post" class="todo">
        <input type="text" name="task" id="task" placeholder="Enter a task">
        <input type="hidden" name="action" value="add">
        <button type="submit">Add Task</button>
    </form>
    <ul>
        <?php foreach($arr as $task): ?>
            <li>
                <form action="" method="post" class="task">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="task" value="<?= $task ?>">
                    <span><?= $task ?></span>
                    <button type="submit" name="del">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
