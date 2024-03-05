<?php

namespace common\modules\MyModule;

use yii\base\BootstrapInterface;

/**
 * my-module module definition class
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'common\modules\MyModule\http';

    public function bootstrap($app): void
    {
        if ($app instanceof \yii\console\Application) {
            $this->controllerNamespace = 'common\modules\MyModule\cli';
        }
    }
}
