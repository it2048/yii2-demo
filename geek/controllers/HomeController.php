<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $tt = '';
        return $this->render('index',['tt'=>$tt]);
    }
}
