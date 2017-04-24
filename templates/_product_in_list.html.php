<div class="card small">
    <div class="card-image">
        <img src="<?php echo $product->getImage() ?>" />
        <span class="card-title"><?php echo $product->getName() ?></span>
    </div>
    <div class="card-content">
        <p><?php echo $product->getDescription() ?></p>
    </div>
    <div class="card-action">
        <a href="<?php echo $product->getUrl() ?>">View product</a>
    </div>
</div>
