<div id="site-about">
    <div class="container2">
        <div class=" dark-wrap">
            <h2><?= $about->title ?></h2>
            <img src="<?= \yii\helpers\Url::base().$about->image ?>" alt="Автомойка"/>
            <div class="picture-description"><?= $about->image_description ?></div>
            <?= $about->text ?>
        </div>
    </div>
</div>