<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
    /* @var $model frontend\models\SearchForm */
?>

<h1>Search</h1>
<?php $form =  ActiveForm::begin();?>

<?= $form->field($model, 'keyword');?>

<?= Html::submitButton('Search', ['class' => 'btn btn-primary']);?>

<?php ActiveForm::end();?>
