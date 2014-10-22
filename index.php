<?php
include('header.php');

global $db;

$result = $db->query("SELECT `username` FROM users WHERE id = '1'");
if (!$result) {
	echo 'error';
}
include('footer.php');
?>