<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <?php foreach ($animals as $animal): ?>
                <li><?= $animal; ?></li>
            <?php endforeach; ?>
        </ul>
    </header>
</body>
</html>