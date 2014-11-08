<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Carousel;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <div class="navbar-wrapper">
            <div class="container">
                <?php
                    NavBar::begin([
                        'brandLabel' => 'Автомойка СКВ',
                        'brandUrl' => Yii::$app->homeUrl,
                        'options' => [
                            'class' => 'navbar navbar-inverse navbar-static-top',
                            'role'  => 'navigation',
                        ],
                    ]);
                    echo Nav::widget([
                        'options' => ['class' => 'navbar-nav'],
                        'items' => [
                            ['label' => 'Главная', 'url' => ['/site/index']],
                            ['label' => 'О нас', 'url' => ['#site-about']],
                            ['label' => 'Услуги и цены', 'url' => ['#site-services']],
                            ['label' => 'Скидки', 'url' => ['#site-discount']],
                            ['label' => 'Контакты', 'url' => ['#site-contact']],
                            ['label' => 'Запись на мойку', 'url' => 'javascript:void(0)', 'options' => [
                                'class' => 'book-car-wash',
                                'value' => 'schedule/create'
                            ]],
                            ['label' => 'Фотои и видео', 'url' => ['#site-photo']],
                            ['label' => 'Отзывы', 'url' => ['#site-feedback']],
                        ],
                    ]);
                    NavBar::end();
                ?>
            </div>
        </div>

        <?php echo Carousel::widget([
            'options' => [
                'id' => 'myCarousel',
                'class' => 'carousel slide',
                'data-ride' => 'carousel'
            ],
            'items' => [
                [
                    'content' => '<div style="width:100%; height:100%; position:relative; background-size: 1302px 700px;" id="cover" onmousemove="try {draw((event.offsetX||event.layerX), (event.offsetY||event.layerY))} catch(e) {}" onmouseover="{X=0; Y=0}"></div>',
                    'caption' => '<div class="slider-caption-wrapper"><h4>Легковые от 290 рублей</h4></div>',
                    'options' => [''],
                ],
                [
                    'content' => '<img src="/images/crossover_clean.jpg"/>',
                    'caption' => '<div class="slider-caption-wrapper"><h4>Кроссоверы от 590 рублей</h4></div>',
                    'options' => [''],
                ],
                [
                    'content' => '<img src="/images/truck_clean.jpg"/>',
                    'caption' => '<div class="slider-caption-wrapper"><h4>Габаритные от 890 рублей</h4></div>',
                    'options' => [''],
                ],
            ],
            'controls' => [
                '<span class="glyphicon glyphicon-chevron-left"></span>',
                '<span class="glyphicon glyphicon-chevron-right"></span>'
            ],
        ]);?>

        <div class="content">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <div class="footer-menu row">
                <?php
                NavBar::begin([
                    'brandUrl' => Yii::$app->homeUrl,
                    'options' => [
                        'class' => '',
                        'role'  => 'navigation',
                    ],
                ]);
                echo Nav::widget([
                    'options' => ['class' => 'nav-justified'],
                    'items' => [
                        ['label' => 'Главная', 'url' => ['/site/index']],
                        ['label' => 'О нас', 'url' => ['#site-about']],
                        ['label' => 'Услуги и цены', 'url' => ['#site-services']],
                        ['label' => 'Скидки', 'url' => ['#site-discount']],
                        ['label' => 'Контакты', 'url' => ['#site-contact']],
                        ['label' => 'Запись на мойку', 'url' => ['/site/contact']],
                    ],
                ]);
                NavBar::end();
                ?>
            </div>
            <div class="col-md-6">
                <p>&copy; Автомойка СКВ <?= date('Y') ?></p>
                <p>ул. средняя, 163<br />
                    (возле мебельной фабрики)</p>
                <p>тел. 342-800, 342-822</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right">Developed by: <a target="_blank" href="https://www.linkedin.com/profile/view?id=205697886&trk=nav_responsive_tab_profile">Ufimtsev A.V.</a></p>
            </div>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
