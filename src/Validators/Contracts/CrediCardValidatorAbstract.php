<?php
/**
 * Class CrediCardValidatorAbstract
 * @package CardValitador\Validators\Contracts
 * @author andrecosta
 */

namespace CardValitador\Validators\Contracts;

use CardValitador\Entities\Card;
use CardValitador\Entities\Contracts\CardInterface;

/**
 * Class CrediCardValidatorAbstract
 * @package CardValitador\Validators\Contracts
 */
abstract class CrediCardValidatorAbstract implements CrediCardValidatorInterface
{

    /**
     * @var CardInterface
     */
    protected $card;

    /**
     * @var \CardValitador\Brands\Contracts\CardInterface
     */
    protected $brand;

    /**
     * CrediCardValidatorAbstract constructor.
     * @param CardInterface $card
     */
    public function __construct(CardInterface $card)
    {
        $this->card = $card;
        $this->identifyBrand();
    }

    /**
     * @return CardInterface
     */
    public function getCard(): CardInterface
    {
        return $this->card;
    }

    /**
     * @return \CardValitador\Brands\Contracts\CardInterface
     */
    public function getBrand(): \CardValitador\Brands\Contracts\CardInterface
    {
        return $this->brand;
    }

    /**
     * @param $pattern
     * @param $number
     * @return bool
     */
    public function isNumberValid($pattern, $number): bool
    {
        return preg_match($pattern, $number);
    }

    /**
     * @param $number
     * @param array $length
     * @return bool
     */
    public function isValidLength($number, array $length): bool
    {
        if(in_array(strlen($number), $length)) {
            return true;
        }

        return false;
    }

    /**
     * @param $cvc
     * @param array $lengths
     * @return bool
     */
    public function isCvcValid($cvc, array $lengths): bool
    {
        if (in_array(strlen($cvc), $lengths)) {
            return true;
        }

        return false;
    }

    /**
     * @param $year
     * @param $month
     * @return bool
     */
    public function isValidDate($year, $month): bool
    {
        $month = str_pad($month, 2, '0', STR_PAD_LEFT);

        if (!preg_match('/^20\d\d$/', $year)) {
            return false;
        }

        if (!preg_match('/^(0[1-9]|1[0-2])$/', $month)) {
            return false;
        }

        // past date
        if ($year < date('Y') || $year == date('Y') && $month < date('m')) {
            return false;
        }

        return true;
    }

    /**
     * @param $number
     * @return bool
     */
    public function isValidLuhn($number): bool
    {
        $checksum = 0;

        for ($i = (2 - (strlen($number) % 2)); $i <= strlen($number); $i += 2) {
            $checksum += (int)($number{$i - 1});
        }

        // Analyze odd digits in even length strings or even digits in odd length strings.
        for ($i = (strlen($number) % 2) + 1; $i < strlen($number); $i += 2) {
            $digit = (int)($number{$i - 1}) * 2;
            if ($digit < 10) {
                $checksum += $digit;
            } else {
                $checksum += ($digit - 9);
            }
        }

        if (($checksum % 10) == 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @inheritDoc
     */
    public function getBrandName(): string
    {
        return $this->getBrand()->getName();
    }

}