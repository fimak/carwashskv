<div id="site-about">
    <div class="container">
        <div class="col-md-16 dark-wrap">
            <div class="col-md-7 picture-wrapper">
                <img src="<?= $about->image ?>" alt="Автомойка"/>
                <div class="picture-description"><?= $about->image_description ?></div>
            </div>
            <h2 class="yellow nomargin"><?= $about->title ?></h2>
            <?= $about->text ?>

        </div>
    </div>
</div>