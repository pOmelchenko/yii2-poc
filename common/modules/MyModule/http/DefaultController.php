<?php

namespace common\modules\MyModule\http;

use yii\web\Controller;

/**
 * Default controller for the `my-module` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
