<?php
$dir = $_GET['dir'];
// list files in a subdirectory of images
$cmd = 'ls / -ltr' . $dir;
system($cmd, $return_value);
echo '<kbd>'.$return_value.'</kbd>';