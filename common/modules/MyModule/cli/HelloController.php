<?php

namespace common\modules\MyModule\cli;

use yii\console\Controller;

class HelloController extends Controller
{
    public function actionHello($message = 'hello world from module'): void
    {
        echo $message . "\n";
    }
}
