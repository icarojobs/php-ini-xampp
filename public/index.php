<?php

/*
 * Require Performance
 */

require_once('../vendor/autoload.php');

use Performance\Performance;

/*
 * One simply performance check
 */

Performance::point();

// Run task A
$size = 1000000;
$users = [];

for ($i = 0; $i < $size; $i++) {
    $users[$i] = rand();
}

// Finish all tasks and show test results
Performance::results();
