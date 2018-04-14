<?php

namespace common\models\domains\tanks;

/**
 * Class BaseTank.
 *
 * @package api\models
 */
abstract class BaseTank implements TankInterface
{
    /**
     * Tank status.
     *
     * @var TankStatus
     */
    protected $status;

    /**
     * Tank volume.
     *
     * @var float
     */
    protected $volume;

    /**
     * Stuff volume that tank contained now.
     *
     * @var float
     */
    protected $stuffVolume;

    /**
     * BaseTank constructor.
     *
     * @param float $volume
     */
    public function __construct($volume)
    {
        $this->volume = $volume;
        $this->stuffVolume = 0;
    }

    /**
     * @inheritdoc
     */
    public function getStatus(): TankStatus
    {
        return $this->status;
    }

    /**
     * @inheritdoc
     */
    public function addStuff(float $volume): float
    {
        $availableVolume = $this->volume - $this->stuffVolume;
        $excessiveVolume = $volume - $availableVolume;

        if ($excessiveVolume > 0) {
            $this->stuffVolume = $this->volume;
            return $excessiveVolume;
        }

        $this->stuffVolume += $volume;

        return 0;
    }

    /**
     * @inheritdoc
     */
    public function releaseStuff(float $volume): float
    {
        $availableStuff = $this->stuffVolume;

        if ($availableStuff >= $volume) {
            $this->stuffVolume -= $volume;
            return $volume;
        }

        $this->stuffVolume = 0;

        return $availableStuff;
    }
}
