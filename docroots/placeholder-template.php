<!DOCTYPE html>
<html>
<head>
    <title><?php echo $host ?></title>

    <style>
    h1.http-host {
        text-align: center;
        font-size: 400%;
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
        width: 550px;
        margin: 0 auto;
        clear: both;
        height: 126px;
    }
    .page-wrapper-push {
        margin-bottom: -63px;
        float: left;
        height: 50%;
    }
    </style>
</head>
<body>
    <div class="page-wrapper-push"></div>
    <div class="page-wrapper">
        <h1 class="http-host"><?php echo $host ?></h1>
        <h2 class="file"><?php echo $file ?></h2>
    </div>
</body>
</html>