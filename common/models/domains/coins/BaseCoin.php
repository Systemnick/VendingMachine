<?php

namespace common\models\domains\coins;

use yii\db\ActiveRecord;

/**
 * Class BaseCoin.
 *
 * @package common\models\domains\coins
 */
class BaseCoin extends ActiveRecord
{
    public const SHAPE_CIRCLE = 'circle';

    /**
     * Coin weight in grams.
     *
     * @var float
     */
    protected $weight;

    /**
     * Coin shape.
     *
     * @var string
     */
    protected $shape;

//    /**
//     * BaseCoin constructor.
//     *
//     * @param float $weight
//     * @param string $shape
//     */
//    public function __construct(float $weight, string $shape)
//    {
//        $this->weight = $weight;
//        $this->shape = $shape;
//    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @return string
     */
    public function getShape(): string
    {
        return $this->shape;
    }
}
