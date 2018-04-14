<?php

namespace api\controllers;

use Yii;
use yii\web\Controller;

/**
 * Class OptionsController.
 *
 * @package api\controllers
 */
class OptionsController extends Controller
{
    /**
     * Set CORS headers.
     *
     * @http_method options
     * @uri <any>
     * @return array
     */
    public function actionCors()
    {
        $response = Yii::$app->getResponse();
        $response->setStatusCode(200);

        return [
            'status' => $response->getStatusCode(),
            'message' => $response->statusText,
        ];
    }
}
