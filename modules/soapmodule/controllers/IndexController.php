<?php

namespace app\modules\soapmodule\controllers;

use yii\web\Controller;

class IndexController extends Controller{
    
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'hello' => 'mongosoft\soapserver\Action',
        ];
    }

    /**
     * @param string $name
     * @return string
     * @soap
     */
    public function getHello($name)
    {
        return 'Hello ' . $name;
    }
}

