<?php
use kartik\widgets\StarRating;
use yii\bootstrap\Modal;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div id="site-feedback">
    <div class="container">
        <div class="dark-wrap">
            <h2 class="yellow nomargin">Отзывы об автомойке</h2>
            <?php foreach ($feedbacks as $feedback) : ?>
                <div class="">
                    <div class="light-wrap review">
                        <?php
                            echo StarRating::widget([
                                'name' => 'rating_1',
                                'pluginOptions' => ['disabled'=>true, 'showClear'=>false],
                                'value' => $feedback->rating
                            ]);
                        ?>
                        <div class="author"><?= Html::encode($feedback->author) ?></div>
                        <div class="feedback"><?= Html::encode($feedback->text) ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="">
            <?= Html::button(
                'Оставить отзыв',
                [
                    'value' => Url::to(['feedback/create']),
                    'id' => 'leave-feedback',
                    'class' => 'btn btn-lg btn-success',
                ])
            ?>
            <?php Modal::begin(['id' => 'modal']);

                echo "<div id='modalContent'></div>";

                Modal::end();
            ?>
        </div>
    </div>
</div>