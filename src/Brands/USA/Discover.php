<?php
/**
 * Class Discover
 * @author andrecosta
 */

namespace CardValitador\Brands\USA;

use CardValitador\Brands\Contracts\AbstractCard;

/**
 * Class Discover
 * @package CardValitador\Brands\USA
 */
class Discover extends AbstractCard
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'discover';
    }

    /**
     * @inheritDoc
     */
    public function getPattern(): string
    {
        return '/^6([045]|22)/';
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