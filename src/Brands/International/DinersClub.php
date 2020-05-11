<?php
/**
 * Class DinersClub
 * @author andrecosta
 */

namespace CardValitador\Brands\International;

use CardValitador\Brands\Contracts\AbstractCard;

/**
 * Class DinersClub
 * @package CardValitador\Brands\International
 */
class DinersClub extends AbstractCard
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'dinersclub';
    }

    /**
     * @inheritDoc
     */
    public function getPattern(): string
    {
        return '/^3[0689]/';
    }

    /**
     * @inheritDoc
     */
    public function getLenght(): array
    {
        return array(14);
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