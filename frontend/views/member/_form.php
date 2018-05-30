<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\KategoriMember;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Member */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="member-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institusi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gender')->radioList(array('L'=>'Laki-Laki','P'=>'Perempuan')); ?>

    <!-- <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?> -->

    <!-- <?= $form->field($model, 'user_id')->textInput() ?> -->

    <?php
      $ar_kategori=KategoriMember::find()->all();

      $listData=ArrayHelper::map($ar_kategori,'id','nama');

      echo $form->field($model, 'kategori_id')->dropDownList(
        $listData,
        ['prompt'=>'Pilih...']
        );
     ?>

    <!-- <?= $form->field($model, 'kategori_id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'deleted_at')->textInput() ?> -->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
