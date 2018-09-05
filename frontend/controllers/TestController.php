<?php
/**
 * Created by PhpStorm.
 * User: d5sfn
 * Date: 05.09.18
 * Time: 13:20
 */

namespace frontend\controllers;

use Yii;
use Faker\Factory;
use yii\web\Controller;
use frontend\models\News;
class TestController extends Controller
{
    public function actionGenerate() {
        ini_set('max_execution_time', 300);
        ini_set('memory_limit', '-1');
     $startTime = microtime(true);
     $faker = Factory::create();
     for ($j = 0; $j < 50000; $j ++)
     {
         $news = [];
         for ($i = 0; $i < 50000 ; $i++ ){
             $news[] = [$faker->text(rand(30, 45)), $faker->text(rand(2000, 3000)), rand(0,1)];
         }
      Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
      unset($news);

     }

        echo "Time:  " . number_format(( microtime(true) - $startTime), 4) . " Seconds\n";


    }
}



