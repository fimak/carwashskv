<?php
use yii\bootstrap\Carousel;
?>
<div id="site-photo">
    <div class="container">
        <div class="col-md-4 dark-wrap">
            <h2 class="yellow nomargin">Фото и видео</h2>
            <ul>
                <li>Альбом 1</li>
                <li>Альбом 2</li>
                <li>Альбом 3</li>
                <li>Альбом 4</li>
                <li>Альбом 5</li>
                <li>Альбом 6</li>
                <li>Альбом 7</li>
                <li>Альбом 8</li>
                <li>Альбом 9</li>
                <li>Альбом 10</li>
                <li>Альбом 11</li>
                <li>Альбом 12</li>
                <li>Альбом 13</li>
                <li>Альбом 14</li>
                <li>Альбом 15</li>
                <li>Альбом 16</li>
                <li>Альбом 17</li>
                <li>Альбом 18</li>
                <li>Альбом 19</li>
                <li>Альбом 20</li>
                <li>Альбом 21</li>
            </ul>
        </div>
        <div class="col-md-8">
            <?php echo Carousel::widget([
                'options' => [
                    'id' => 'photoCarousel',
                    'class' => 'carousel slide',
                    'data-ride' => 'carousel'
                ],
                'items' => [
                    [
                        'content' => '<img src="/images/sedan_clean.jpg"/>',
                        'caption' => '<div class="slider-caption-wrapper"></div>',
                        'options' => [''],
                    ],
                    [
                        'content' => '<img src="/images/crossover_clean.jpg"/>',
                        'caption' => '<div class="slider-caption-wrapper"></div>',
                        'options' => [''],
                    ],
                    [
                        'content' => '<img src="/images/truck_clean.jpg"/>',
                        'caption' => '<div class="slider-caption-wrapper"></div>',
                        'options' => [''],
                    ],
                ],
            ]);?>
        </div>
    </div>
</div>