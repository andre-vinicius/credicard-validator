<?php
/**
 * Class CardInterface
 * @author andrecosta
 */

namespace CardValitador\Brands\Contracts;

/**
 * Interface CardInterface
 * @package CardValitador\Brands\Contracts
 */
interface CardInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getPattern(): string;

    /**
     * @return array
     */
    public function getLenght(): array;

    /**
     * @return array
     */
    public function getCVCLength(): array;

    /**
     * @return bool
     */
    public function isLuhn(): bool;

}