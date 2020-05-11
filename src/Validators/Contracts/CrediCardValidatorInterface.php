<?php
/**
 * Class CrediCardValidatorInterface
 * @author andrecosta
 */

namespace CardValitador\Validators\Contracts;

use CardValitador\Entities\Contracts\CardInterface;

/**
 * Class CrediCardValidatorInterface
 * @package CardValitador\Validators\Contracts
 */
interface CrediCardValidatorInterface
{

    /**
     * CrediCardValidatorInterface constructor.
     * @param CardInterface $card
     */
    public function __construct(CardInterface $card);

    /**
     * @return bool
     */
    public function identifyBrand(): bool;

    /**
     * @return CardInterface
     */
    public function getCard(): CardInterface;

    /**
     * @return \CardValitador\Brands\Contracts\CardInterface
     */
    public function getBrand(): \CardValitador\Brands\Contracts\CardInterface;

    /**
     * @param $pattern
     * @param $number
     * @return bool
     */
    public function isNumberValid($pattern, $number): bool;

    /**
     * @param $number
     * @param $length
     * @return bool
     */
    public function isValidLength($number, array $length): bool;

    /**
     * @param $cvc
     * @param array $lengths
     * @return bool
     */
    public function isCvcValid($cvc, array $lengths): bool;

    /**
     * @param $year
     * @param $month
     * @return bool
     */
    public function isValidDate($year, $month): bool;

    /**
     * @param $number
     * @return bool
     */
    public function isValidLuhn($number): bool;

    /**
     * @return string
     */
    public function getBrandName(): string;

}