<?php
/**
 * Class UnionPay
 * @author andrecosta
 */

namespace CardValitador\Brands\China;

use CardValitador\Brands\Contracts\AbstractCard;

/**
 * Class UnionPay
 * @package CardValitador\Brands\China
 */
class UnionPay extends AbstractCard
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'unionpay';
    }

    /**
     * @inheritDoc
     */
    public function getPattern(): string
    {
        return '/^(62|88)/';
    }

    /**
     * @inheritDoc
     */
    public function getLenght(): array
    {
        return array(16, 17, 18, 19);
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
        return false;
    }

}