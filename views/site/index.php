<?php

/* @var $this yii\web\View */

use kartik\helpers\Enum;
use yii\helpers\Html;

$this->title = 'Inicio';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <?php foreach ($safetyPlaces as $safetyPlace) : ?>
                <div class="col-md-4 col-xs-12 col-sm-12">
                    <div class="card text-center">
                        <div class="card-header">
                            <?= $safetyPlace->state ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $safetyPlace->name ?></h5>
                            <p class="card-text"><b>Dirección: </b> <?= $safetyPlace->address ?></p>
                            <p class="card-text"><b>Detalles: </b> <?= $safetyPlace->details ?></p>
                            <?= Html::a('<i class="fa fa-map-marker"></i> ' . Yii::t('app', 'Ir para allá'), [
                                '/request/create', 'safety-place' => $safetyPlace->id
                            ], [
                                'class' => 'btn btn-primary',
                                'data' => ['confirm' => Yii::t('app', '¿Decide mandar una alerta de llegada a este punto de seguridad?')]
                            ]) ?>
                        </div>
                        <div class="card-footer text-muted">
                            <?= Enum::timeElapsed($safetyPlace->createdAt, true) ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>