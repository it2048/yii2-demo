<?php

namespace app\controllers;

use app\component\IP;
use Yii;
use yii\web\Controller;
use app\models\LoginForm;
use app\models\ContactForm;

class HomeController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest()
    {
        $ip = '203.195.224.11';
        $i = 3000;
        while($i--)
        {
            $model = new IP();
            $tr = $model->find($ip);

//            $tr = IPT::find($ip);
        }

        return $this->render('index',['tt'=>$tr]);
    }
}
