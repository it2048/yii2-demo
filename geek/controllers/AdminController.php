<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $parser = new \cebe\markdown\Markdown();
        $tt = $parser->parse('####34566');
        return $this->render('index',['tt'=>$tt]);
    }
}
