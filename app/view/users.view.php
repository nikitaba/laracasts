<?php require 'partials/head.php';?>

    <h1>All Users</h1>

    <?php foreach ($users as $user): ?>
        <li><?= $user->name; ?></li>
    <?php endforeach;?>

    <h3>Submit your name</h3>
    <form method="post" action="../../index.php">
        <label for="name">Name</label><input id="name" name="name"><br>
        <button type="submit">Submit</button>
    </form>

<?php require 'partials/footer.php';?>