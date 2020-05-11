<?php
/**
 * Class Card
 * @author andrecosta
 */

namespace CardValitador\Entities;

use CardValitador\Entities\Contracts\CardInterface;

/**
 * Class Card
 * @package CardValitador\Entities
 */
class Card implements CardInterface
{

    /**
     * @var string
     */
    private $number;

    /**
     * @var int
     */
    private $cvc;

    /**
     * @var string
     */
    private $date;

    /**
     * @inheritDoc
     */
    public function __construct(string $number, int $cvc, string $date)
    {
        $this->number = $number;
        $this->cvc = $cvc;
        $this->date = $date;
    }

    /**
     * @inheritDoc
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @inheritDoc
     */
    public function getCvc(): int
    {
        return $this->cvc;
    }

    /**
     * @inheritDoc
     */
    public function getDate(): string
    {
        return $this->date;
    }

}