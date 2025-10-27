<?php
define("PATH", "http://" . $_SERVER['HTTP_HOST']);
// dd(PATH);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="<?=PATH?>/assets/css/simple.css">
    <!-- <link rel="stylesheet" href="<?=PATH?>/assets/css/style.css"> -->
</head>
<body>
    <header>
        <h1>Blog</h1>
        <?php require 'nav.php'; ?>
    </header>
    <main>


