<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriMember */

$this->title = 'Create Kategori Member';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-member-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
