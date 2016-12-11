<?php

require 'bootstrap.php';
require 'Task.php';

$pdo = Connection::make();

$query = new QueryBuilder($pdo);

$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';
