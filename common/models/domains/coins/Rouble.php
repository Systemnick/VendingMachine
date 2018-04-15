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
     * Coin diameter in millimeters.
     *
     * @var int
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
     * @return int
     */
    public function getDiameter(): int
    {
        return $this->diameter;
    }

    /**
     * Coin currency.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return 'RUR';
    }

    /**
     * Rouble constructor.
     *
     * @param mixed[] $params {
     *      @option int $weight
     *      @option float $weight
     *      @option string $shape
     *      @option string $material
     * }
     */
    public function __construct(array $params = [])
    {
        $params['material'] = $params['material'] ?: static::MATERIAL_1;
        $params['diameter'] = $params['diameter'] ?: 15;
        parent::__construct($params);
    }
}
