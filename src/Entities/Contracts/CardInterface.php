<?php
/**
 * Class CardInterface
 * @author andrecosta
 */

namespace CardValitador\Entities\Contracts;

/**
 * Interface CardInterface
 * @package CardValitador\Entities\Contracts
 */
interface CardInterface
{

    /**
     * CardInterface constructor.
     * @param string $number
     * @param int $cvc
     * @param string $date
     */
    public function __construct(string $number, int $cvc, string $date);

    /**
     * @return string
     */
    public function getNumber(): string;

    /**
     * @return int
     */
    public function getCvc(): int;

    /**
     * @return string
     */
    public function getDate(): string;

}