<?php

namespace api\controllers;

use api\exceptions\VMException;
use api\exceptions\VMNotFoundException;
use api\models\ar\Machine;
use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * Class BalanceController.
 *
 * @package api\controllers
 */
class BalanceController extends Controller
{
    /**
     * @http_method post
     * @uri /v1/machine
     *
     * @return Machine
     * @throws VMException
     */
    public function actionAcceptCoin()
    {
        $vm = Machine::findOne(['id' => $id]);

        if ($vm === null) {
            throw new VMNotFoundException('Vending machine not found');
        }

        if (!$vm->save()) {
            \Yii::error('Database error: ' . VarDumper::export($vm->errors));
            throw new VMException();
        }

        return $vm;
    }

    /**
     * @http_method get
     * @uri /v1/machine/{id}
     *
     * @param int $id
     *
     * @return Machine
     * @throws VMNotFoundException
     */
    public function actionShow($id)
    {
        $vm = Machine::findOne(['id' => $id]);

        if ($vm === null) {
            throw new VMNotFoundException('Vending machine not found');
        }

        return $vm;
    }
}
