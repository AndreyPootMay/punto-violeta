<?php

/* @var $this yii\web\View */
/* @var $model app\models\Requests */

$this->title = Yii::t('app', 'Nuevo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Solicitudes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requests-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
