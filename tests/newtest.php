<?php
echo 'Current script owner: ' . get_current_user();

$username = getenv('USERNAME') ?: getenv('USER');
echo "\n\n\n$username"; // e.g. root or www-data


?>