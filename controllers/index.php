<?php

require 'Task.php';

$tasks = $app['database']->selectAll('todos', 'Task');

require 'view/index.view.php';