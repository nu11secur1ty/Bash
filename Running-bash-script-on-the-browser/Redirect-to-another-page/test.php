<?php

$home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/finish.html';
$output = shell_exec('./bash_script.sh');
header('Location: ' . $home_url);
?>
