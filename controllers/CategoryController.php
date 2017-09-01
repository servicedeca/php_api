<?php

namespace app\controllers;

use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = 'app\models\Category';

    public function actionIndex()
    {
        return $this->render('index');
    }

}
