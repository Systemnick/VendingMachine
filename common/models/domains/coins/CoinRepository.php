<?php

namespace common\models\domains\coins;

use common\exceptions\VMInvalidCoinException;

/**
 * Class CoinRepository.
 *
 * @package common\models\domains\coins
 */
class CoinRepository
{
    /** @var string Coin type allowed in repository. */
    protected $coinType;

    /** @var array Repository. */
    protected $stack = [];

    /**
     * CoinRepository constructor.
     *
     * @param string $coinType
     */
    public function __construct(string $coinType)
    {
        $this->coinType = $coinType;
    }

    /**
     * Add coin to the repository.
     *
     * @param BaseCoin $coin
     *
     * @return CoinRepository
     * @throws VMInvalidCoinException
     */
    public function push(BaseCoin $coin): self
    {
        if (!$coin instanceof $this->coinType) {
            throw new VMInvalidCoinException();
        }
        array_push($this->stack, $coin);

        return $this;
    }

    /**
     * Get coin from the repository and remove it.
     *
     * @return BaseCoin
     */
    public function pop(): BaseCoin
    {
        return array_pop($this->stack);
    }
}
