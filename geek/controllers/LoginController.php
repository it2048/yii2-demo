<?php

namespace app\controllers;

use app\component\CHelp;
use app\models\LoginForm;
use Yii;

class LoginController extends CHelp
{

    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
    public function actionLogin()
    {
        $msg = $this->initMsg();
        if (!\Yii::$app->user->isGuest) {
            $msg['data'] = $this->goHome();
        }
        $blogUser = new LoginForm();
        if ($blogUser->load(['LoginForm'=>Yii::$app->request->post()]) && $blogUser->login()) {
            $msg['code'] = 0;
            $msg['data'] = $this->goBack();
        } else {
            $msg['msg'] = '账号密码错误';
        }
        echo json_encode($msg);
    }
}