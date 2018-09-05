<?php
 namespace frontend\controllers;
use Yii;
 use yii\web\Controller;
 use frontend\models\SearchForm;

 class  SearchController extends Controller{

     public function actionIndex()
     {
         $model = new SearchForm();
//         var_dump($model->load(Yii::$app->request->post()));
//         die();

         if ($model->load(Yii::$app->request->post()) && $results = $model->search()) {
               echo '<pre>';
               var_dump($results);
               echo '</pre>';
               die();
         }
         return $this->render ('index', [
            'model' => $model,
         ]);
     }


 }


