<?php
/* @var $this yii\web\View */
$this->title = 'Автомойка СКВ';
?>
<div class="site-index">

    <?= $this->render('_about', ['about' => $about]); ?>

    <?= $this->render('_services', ['services' => $services, 'discounts' => $discounts]); ?>

    <?= $this->render('_contact'); ?>

    <?= $this->render('_photo'); ?>

    <?= $this->render('_feedback', ['feedbacks' => $feedbacks]); ?>

</div>
