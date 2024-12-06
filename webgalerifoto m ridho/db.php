<?php
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$dbname   = 'galeri_ridho';
	
	$conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('gagal terhubung ke database');
?>