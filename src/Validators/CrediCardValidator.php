<?php
/**
 * Class CrediCardValidator
 * @author andrecosta
 */

namespace CardValitador\Validator;

use CardValitador\Brands\Brazil\Elo;
use CardValitador\Brands\China\UnionPay;
use CardValitador\Brands\Contracts\CardInterface;
use CardValitador\Brands\International\Amex;
use CardValitador\Brands\International\DinersClub;
use CardValitador\Brands\International\MasterCard;
use CardValitador\Brands\International\Visa;
use CardValitador\Brands\USA\Discover;
use CardValitador\Validators\Contracts\CrediCardValidatorAbstract;

/**
 * Class CrediCardValidator
 * @package CardValitador\Validators
 */
class CrediCardValidator extends CrediCardValidatorAbstract
{

    /**
     * @var array
     */
    private $brands = [
        Elo::class,
        UnionPay::class,
        Amex::class,
        DinersClub::class,
        MasterCard::class,
        Visa::class,
        Discover::class
    ];

    /**
     * @return bool
     * @throws \Exception
     */
    public function identifyBrand(): bool
    {
        foreach ($this->brands as $brand) {
            /** @var CardInterface $brandObject */
            $brandObject = (new $brand());

            if(
                $this->isNumberValid($brandObject->getPattern(), $this->getCard()->getNumber()) &&
                $this->isCvcValid($this->getCard()->getCvc(), $brandObject->getCVCLength()) &&
                $this->isValidLength($this->getCard()->getNumber(), $brandObject->getLenght()) &&
                ($brandObject->isLuhn() && $this->isValidLuhn($this->getCard()->getNumber()))
            ) {
                $this->brand = $brandObject;
                return true;
            }
        }

        throw new \Exception('Brand card not identify from number!');
    }

}