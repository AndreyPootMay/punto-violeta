<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Requests */

$this->title = "Solicitud - {$model->folio}";
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Solicitudes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="requests-view">

    <p class="btn-group">
        <?= Html::a(Yii::t('app', 'Regresar'), ['/site/index'], [
            'class' => 'btn btn-primary'
        ]) ?>
    </p>
    <div class="row">
        <div class="col-md-6">
            <?= $this->render('_singlemap', [
                'lng' => $model->long,
                'lat' => $model->lat,
                'title' => $model->safetyPlace->address
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'folio',
                    [
                        'attribute' => 'safety_place_id',
                        'label' => Yii::t('app', 'Lugar solicitado'),
                        'value' => function ($model) {
                            return $model->safetyPlace->name ?? Yii::t('app', 'N/A');
                        }
                    ],
                    'full_name',
                    'age_old',
                    'details:ntext',
                    'cancelled:boolean',
                    'active:boolean',
                    [
                        'attribute' => 'createdAt',
                        'format' => 'date',
                    ],
                ],
            ]) ?>
        </div>
    </div>
</div>