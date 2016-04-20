<?php
$title = $_SERVER['REQUEST_URI'];
$title = explode('/', $title);
?>
<html>
<head>
    <title><?php echo ucfirst($title[2]); ?></title>
    <link rel="stylesheet" href="/adminmvc/template/css/style.css">
</head>
<body>