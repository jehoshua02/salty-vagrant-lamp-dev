<?php

$hosts = array_map(function ($file) {
    return array_pop(explode('/', $file));
}, glob(__DIR__ . '/*', GLOB_ONLYDIR));

$address = $_SERVER['SERVER_ADDR'];

?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $currentHost ?></title>

    <style>
    h1.http-host {
        text-align: center;
        font-size: 300%;
        margin: 0;
    }

    h2.file {
        text-align: center;
        color: #ccc;
        margin-bottom: 0;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    .page-wrapper {
        margin: 0 auto;
        clear: both;
        height: 126px;
    }
    .page-wrapper-push {
        margin-bottom: -63px;
        float: left;
        height: 50%;
    }
    .hosts {
        color: #ccc;
        padding-left: 50%;
        display: block;
        font-size: 14px;
        line-height: 18px;
    }
    .hosts code {
        margin-left: -150px;
        display: inline-block;
    }
    .hosts a {
        text-decoration: none;
        color: #ccc;
    }
    .hosts a:hover {
        color: #aaa;
    }
    .hosts a.current {
        color: #A6D08F;
    }
    </style>
</head>
<body>
    <div class="page-wrapper-push"></div>
    <div class="page-wrapper">
        <h1 class="http-host"><?php echo $currentHost ?></h1>
        <h2 class="file"><?php echo $file ?></h2>
        <pre class="hosts"><code>
<?php foreach ($hosts as $host): ?>
<?php if ($host != $currentHost): ?>
<a href="http://<?php echo $host ?>"><?php echo $address ?>    <?php echo $host ?></a>
<?php else: ?>
<a href="http://<?php echo $host ?>" class="current"><?php echo $address ?>    <?php echo $host ?></a>
<?php endif ?>
<?php endforeach ?></code></pre>
    </div>
</body>
</html>
