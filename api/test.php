<?php
include('../class/config.php');
$ServerName = 'localhost1.com';
$backslash = '\\';
$cmd = 'mkdir '.$DocumentRoot.''.$backslash.''.$ServerName.'';
echo $cmd;
$output = shell_exec(''.$cmd.'');
echo "<pre>$output</pre>";
?>