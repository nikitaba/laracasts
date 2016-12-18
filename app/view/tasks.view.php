<?php require 'partials/head.php'; ?>
<h1>Task For The Day</h1>
<ul>
    <?php foreach ($tasks as $taskKey => $task): ?>
        <li>
            <strong>Task<?= $taskKey + 1; ?>: </strong>
            <?php if($task->completed):?>
                <strike><?= $task->description; ?></strike>
            <?php else: ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<form method="post" action="../../index.php">
    <label for="description">Description</label><input id="description" name="description"><br>
    <label for="completed">Completed</label><input id="completed" name="completed"><br>
    <button type="submit">Submit</button>
</form>
<?php require 'partials/footer.php';?>