<?php

namespace common\models\domains\tanks;

/**
 * Interface TankInterface.
 *
 * @package api\models
 */
interface TankInterface
{
    /**
     * Check health of the tank.
     *
     * @return TankStatus
     */
    public function getStatus(): TankStatus;

    /**
     * Fill tank with provided stuff.
     *
     * @param float $volume
     *
     * @return float Provided volume that cannot be contained in the tank.
     */
    public function addStuff(float $volume): float;

    /**
     * Release some stuff from tank.
     *
     * @param float $volume
     *
     * @return float Stuff volume that was released.
     */
    public function releaseStuff(float $volume): float;
}
