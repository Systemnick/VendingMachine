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

    /**
     * Coin value.
     *
     * @var string
     */
    protected $value;

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

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
