<?php

$main = function () {
    $host = $_SERVER['HTTP_HOST'];
    $file = __FILE__;
    include __DIR__ . '/../placeholder-template.php';
};

$main();
unset($main);
