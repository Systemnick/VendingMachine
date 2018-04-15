<?php

namespace api\components;

use common\models\domains\coins\BaseCoin;
use common\models\domains\coins\Rouble;

/**
 * Class CoinFabric.
 *
 * @package api\components
 */
class CoinFabric
{
    /**
     * @return Rouble
     */
    public function emitOneRouble(): Rouble
    {
        return new Rouble([
            'value' => 1,
            'diameter' => 21,
            'weight' => 3.2,
            'shape' => BaseCoin::SHAPE_CIRCLE,
            'material' => Rouble::MATERIAL_1
        ]);
//        return new Rouble(3.2, BaseCoin::SHAPE_CIRCLE, Rouble::MATERIAL_1);
    }

    /**
     * @return Rouble
     */
    public function emitTwoRoubles(): Rouble
    {
        return new Rouble([
            'value' => 2,
            'diameter' => 23,
            'weight' => 5.1,
            'shape' => BaseCoin::SHAPE_CIRCLE,
            'material' => Rouble::MATERIAL_1
        ]);
//        return new Rouble(5.1, BaseCoin::SHAPE_CIRCLE, Rouble::MATERIAL_1);
    }

    /**
     * @return Rouble
     */
    public function emitFiveRoubles(): Rouble
    {
        return new Rouble([
            'value' => 5,
            'diameter' => 25,
            'weight' => 6.5,
            'shape' => BaseCoin::SHAPE_CIRCLE,
            'material' => Rouble::MATERIAL_2
        ]);
//        return new Rouble(6.5, BaseCoin::SHAPE_CIRCLE, Rouble::MATERIAL_2);
    }

    /**
     * @return Rouble
     */
    public function emitTenRoubles(): Rouble
    {
        return new Rouble([
            'value' => 10,
            'diameter' => 22,
            'weight' => 5.7,
            'shape' => BaseCoin::SHAPE_CIRCLE,
            'material' => Rouble::MATERIAL_3
        ]);
//        return new Rouble(5.7, BaseCoin::SHAPE_CIRCLE, Rouble::MATERIAL_3);
    }
}
