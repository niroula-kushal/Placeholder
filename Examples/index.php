<?php
include '../vendor/autoload.php';
use Coffee\Placeholder\PlaceholderManager; 
?>
<html>
<body>
    <h1>Your Header</h1>
    <?php require_once './body.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <?= PlaceholderManager::getContent('to-end'); ?>
</body>
</html>