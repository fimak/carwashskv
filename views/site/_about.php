<div id="site-about">
    <div class="container">
        <div class="col-md-6 dark-wrap">
            <h2 class="yellow nomargin"><?= $about->title ?></h2>
            <?= $about->text ?>
        </div>
        <div class="col-md-6 picture-wrapper">
            <img src="<?= $about->image ?>" alt="Автомойка"/>
            <div class="picture-description"><?= $about->image_description ?></div>
        </div>
    </div>
</div>