<?php
 namespace  app\componenents;

 use Yii;
 use frontend\models\Auth;
 use frontend\models\User;
 use yii\authclient\ClientInterface;
 use yii\helpers\ArrayHelper;


class  AuthHandler{

    private $client;

    public function __construct (ClientInterface $client)
    {
        $this->client = $client;
    }

    public function handle()
    {
         if (!Yii::$app->user->isGuest){
             return;
         }

        $attributes = $this->client->getUserAttributes();
         echo '<pre>';
         print_r($attributes);
         echo '</pre>';
         die();




    }
}