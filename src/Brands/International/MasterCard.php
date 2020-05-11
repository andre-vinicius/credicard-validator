<?php
/**
 * Class MasterCard
 * @author andrecosta
 */

namespace CardValitador\Brands\International;

use CardValitador\Brands\Contracts\AbstractCard;

/**
 * Class MasterCard
 * @package CardValitador\Brands\International
 */
class MasterCard extends AbstractCard
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'mastercard';
    }

    /**
     * @inheritDoc
     */
    public function getPattern(): string
    {
        return '/^(5[0-5]|2[2-7])/';
    }

    /**
     * @inheritDoc
     */
    public function getLenght(): array
    {
        return array(16);
    }

    /**
     * @inheritDoc
     */
    public function getCVCLength(): array
    {
        return array(3);
    }

    /**
     * @inheritDoc
     */
    public function isLuhn(): bool
    {
        return true;
    }

}