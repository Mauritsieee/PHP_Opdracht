<?php
$_404Page = false;

$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "beterzitten";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$currentPage = '';

$CurPageURL = $_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"];
// Read all pages
if (isset($_GET["page"]))
{
    $currentPage = $_GET["page"];
} else {
  $currentPage = 'home';
}

// Boolean if logged in
$loggedIn = false;