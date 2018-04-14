<?php

namespace api\controllers;

use api\exceptions\VMException;
use api\exceptions\VMNotFoundException;
use api\models\ar\Machine;
use yii\helpers\VarDumper;
use yii\web\Controller;

/**
 * Class MachineController.
 *
 * @package api\controllers
 */
class MachineController extends Controller
{
    /**
     * @http_method post
     * @uri /v1/machine
     *
     * @return Machine|null
     * @throws VMException
     */
    public function actionCreateMachine()
    {
        $vm = new Machine();

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
     * @return Machine|null
     * @throws VMNotFoundException
     */
    public function actionShowStatus($id)
    {
        $vm = Machine::findOne(['id' => $id]);

        if ($vm === null) {
            throw new VMNotFoundException('Vending machine not found');
        }

        return $vm;
    }
}
