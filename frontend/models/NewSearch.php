<?php
/**
 * Created by PhpStorm.
 * User: d5sfn
 * Date: 05.09.18
 * Time: 15:51
 */

namespace frontend\models;
use Yii;


class NewSearch
{
    public function simpleSearch($keyword){
        $sql ="SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}