<?php
namespace frontend\models;

use yii\base\Model;
use frontend\models\NewSearch;
use Yii;

/**
 * Login form
 */
class SearchForm extends Model
{
    public $keyword;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['keyword', 'trim'],
            ['keyword', 'required'],
            ['keyword', 'string', 'min' => 3],


        ];
    }

    public function search()
    {

        if($this->validate()){
//            var_dump($this->validate());
//            die('in');
            $model = new NewSearch();
            return $model->simpleSearch($this->keyword);
        }
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */

}
