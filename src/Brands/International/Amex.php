<?php
/**
 * Class Amex
 * @author andrecosta
 */

namespace CardValitador\Brands\International;

use CardValitador\Brands\Contracts\AbstractCard;

/**
 * Class Amex
 * @package CardValitador\Brands\International
 */
class Amex extends AbstractCard
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'amex';
    }

    /**
     * @inheritDoc
     */
    public function getPattern(): string
    {
        return '/(\d{1,4})(\d{1,6})?(\d{1,5})?/';
    }

    /**
     * @inheritDoc
     */
    public function getLenght(): array
    {
        return array(15);
    }

    /**
     * @inheritDoc
     */
    public function getCVCLength(): array
    {
        return array(3, 4);
    }

    /**
     * @inheritDoc
     */
    public function isLuhn(): bool
    {
       return true;
    }

}