<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriMember */

$this->title = 'Update Kategori Member: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kategori Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kategori-member-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
