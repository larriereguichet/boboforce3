<!DOCTYPE html>
<html lang="en">
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <title><?php echo $product->getName() ?></title>
</head>
<body>
    <?php include __DIR__.'/_header.html.php' ?>

    <h1><?php echo $product->getName() ?></h1>
    <div class="row">
        <div class="col s4">
            <div class="card big">
                <div class="card-image">
                    <img src="<?php echo $product->getImage() ?>" />
                    <span class="card-title"><?php echo $product->getPriceWithTaxes() ?> $</span>
                </div>
                <div class="card-content">
                    <p><?php echo $product->getName() ?></p>
                </div>
            </div>
        </div>
        <div class="col s8">
            <p><?php echo $product->getDescription() ?></p>
            <ul class="collection">
                <li class="collection-item avatar">
                    <i class="material-icons circle">folder_open</i>
                    <span class="title">Brand</span>
                    <p><?php echo $product->getBrandName() ?></p>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle">functions</i>
                    <span class="title">Weight</span>
                    <p><?php echo $product->getWeightValueAndUnit() ?></p>
                </li>
            </ul>
        </div>
    </div>

    <?php echo $product->getPrice() ?>

    <?php include __DIR__.'/_footer.html.php' ?>
</body>
</html>
