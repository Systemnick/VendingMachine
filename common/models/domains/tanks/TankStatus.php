<?php

namespace common\models\domains\tanks;

/**
 * Class TankStatus.
 *
 * @package api\models
 */
class TankStatus
{
    /**
     * Available stuff volume.
     *
     * @var float
     */
    protected $availableStuffVolume;

    /**
     * All tank errors.
     *
     * @var array
     */
    protected $errors;

    /**
     * @return float
     */
    public function getAvailableStuffVolume(): float
    {
        return $this->availableStuffVolume;
    }

    /**
     * @param float $availableStuffVolume
     *
     * @return TankStatus
     */
    public function setAvailableStuffVolume(float $availableStuffVolume): TankStatus
    {
        $this->availableStuffVolume = $availableStuffVolume;
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * @param array $error
     *
     * @return TankStatus
     */
    public function addErrors(array $error): TankStatus
    {
        $this->errors[] = $error;
        return $this;
    }

    /**
     * @return TankStatus
     */
    public function clearErrors(): TankStatus
    {
        $this->errors = [];
        return $this;
    }
}
