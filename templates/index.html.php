<!DOCTYPE html>
<html lang="en">
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <title>Boboforce 3</title>
</head>
<body>
    <?php require_once __DIR__.'/_header.html.php' ?>

    <div class="row">
        <?php foreach ($products as $product): ?>
            <div class="col s6 m3">
                <?php include __DIR__.'/_product_in_list.html.php' ?>
            </div>
        <?php endforeach ?>
    </div>

    <?php include __DIR__.'/_footer.html.php' ?>
</body>
</html>
