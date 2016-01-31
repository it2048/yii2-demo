<?php

namespace app\common;

use Yii;
use yii\web\Controller;
/**
 * Created by PhpStorm.
 * User: sibenx
 * Date: 15/11/15
 * Time: 下午10:53
 */

class CHelp extends Controller
{
    public function initMsg()
    {
        return ['code'=>1,'msg'=>'未知错误','data'=>null];
    }


}