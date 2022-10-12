<?php
$mysqli = new mysqli("localhost", "root", "", "mydb");

echo $mysqli ->host_info . "\n";


