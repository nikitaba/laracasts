<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Task For The Day</h1>
    <ul>
        <li>
            <strong>Name: </strong><?= $task['title']?>
        </li>
        <li>
            <strong>Due Date: </strong><?= $task['due']?>
        </li>
        <li>
            <strong>Person Responsible: </strong><?= $task['assigned_to']?>
        </li>
        <li>
            <strong>Status: </strong><?= $task['completed'] ? '&#9745;' : '&#9746;'?>
        </li>
    </ul>
</body>
</html>