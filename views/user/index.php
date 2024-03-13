<?php
/** @var $model */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, "firstName")->textInput()  ?>
<?= $form->field($model, "lastName")->textInput()  ?>
<?= $form->field($model, "patronymic")->textInput()  ?>
<?= $form->field($model, "email")->textInput()  ?>
<?= $form->field($model, "password")->passwordInput()   ?>
<?= $form->field($model, "passwordRepeat")->passwordInput()  ?>

<?= Html::submitButton("Отправить") ?>

<?php ActiveForm::end(); ?>
