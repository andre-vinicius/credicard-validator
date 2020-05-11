<?php
/**
 * Class Visa
 * @author andrecosta
 */

namespace CardValitador\Brands\International;

use CardValitador\Brands\Contracts\AbstractCard;

/**
 * Class Visa
 * @package CardValitador\Brands\International
 */
class Visa extends AbstractCard
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'visa';
    }

    /**
     * @inheritDoc
     */
    public function getPattern(): string
    {
        return '/^4/';
    }

    /**
     * @inheritDoc
     */
    public function getLenght(): array
    {
        return array(13, 16);
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