<?php

namespace common\models\domains\coins;

/**
 * Class Rouble.
 *
 * @package common\models\domains\coins
 */
class Rouble extends BaseCoin
{
    public const MATERIAL_1 = 'copper-nickel-and-steel-plating';
    public const MATERIAL_2 = 'copper-with-argenton-sheathing-and-nickel-plating';
    public const MATERIAL_3 = 'steel-with-brass-plating';

    /**
     * Coin material.
     *
     * @var string
     */
    protected $material;

    /**
     * Coin diameter.
     *
     * @var string
     */
    protected $diameter;

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * @return string
     */
    public function getDiameter(): string
    {
        return $this->diameter;
    }

    /**
     * Coin currency.
     * @return string
     */
    public function getCurrency(): string
    {
        return 'RUR';
    }

//    public function __construct(float $weight, string $shape, string $material)
//    {
//        parent::__construct(['weight' => $weight, 'shape' => $shape]);
//        $this->material = $material;
//    }
}
