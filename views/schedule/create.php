<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Schedule */

$this->title = 'Create Schedule';
$this->params['breadcrumbs'][] = ['label' => 'Schedules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedule-create">

    <h1>Записаться на мойку</h1>

    <?= $this->render('_form', [
        'model' => $model,
        'servicesList' => $servicesList
    ]) ?>

</div>
