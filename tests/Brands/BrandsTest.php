<?php
/**
 * Class BrandsTest
 * @author andrecosta
 */

namespace Tests\Brands;

use CardValitador\Entities\Card;
use CardValitador\Validator\CrediCardValidator;
use PHPUnit\Framework\TestCase;

/**
 * Class BrandsTest
 * @package Tests\Brands
 */
class BrandsTest extends TestCase
{

    /**
     * @return array
     */
    public function getNumbersFromElo() :array
    {
        return [
                [new Card('5041754303447868', 123, '03/2021')],
                //[new Card('4576809732726740', 123, '03/2021')],
                [new Card('5066997743375559', 123, '03/2021')],
                [new Card('5066995454600769', 123, '03/2021')],
                [new Card('4389354088985860', 123, '03/2021')],
                [new Card('5066991376952198', 123, '03/2021')]
        ];
    }

    /**
     * @return array
     */
    public function getNumbersFromAmex(): array
    {
        return [
            [new Card('349775544419234', 123, '03/2021')],
            [new Card('344402875114814', 123, '03/2021')],
            [new Card('346970577175828', 123, '03/2021')],
            [new Card('370224246390429', 123, '03/2021')],
            [new Card('347708456324797', 123, '03/2021')],
            [new Card('373535788739302', 123, '03/2021')]
        ];
    }

    /**
     * @return array
     */
    public function getNumbersFromMasterCard(): array
    {
        return [
            [new Card('5225841163361855', 123, '03/2021')],
            [new Card('5126922761188005', 123, '03/2021')],
            [new Card('5365259185646718', 123, '03/2021')],
            [new Card('5440236126874087', 123, '03/2021')],
            [new Card('5327361175131847', 123, '03/2021')],
            [new Card('5519648795574309', 123, '03/2021')]
        ];
    }

    /**
     * @return array
     */
    public function getNumbersFromVisa(): array
    {
        return [
            [new Card('4532098750298229', 123, '03/2021')],
            [new Card('4024007117652809', 123, '03/2021')],
            [new Card('4716444981564948', 123, '03/2021')],
            [new Card('4556341322221407', 123, '03/2021')],
            [new Card('4532075037107928', 123, '03/2021')],
            [new Card('4929827762252134', 123, '03/2021')]
        ];
    }

    /**
     * @return array
     */
    public function getNumbersFromDiners(): array
    {
        return [
            [new Card('38254739346236', 123, '03/2021')],
            [new Card('30053342206979', 123, '03/2021')],
            [new Card('38152506174957', 123, '03/2021')],
            [new Card('30020059701955', 123, '03/2021')],
            [new Card('30395523414041', 123, '03/2021')],
            [new Card('30395523414041', 123, '03/2021')]
        ];
    }

    /**
     * @param $card
     * @dataProvider getNumbersFromElo
     */
    public function testaIndetificaoBandeiraElo($card)
    {
        $brand = (new CrediCardValidator($card))->getBrand()->getName();

        $this->assertEquals('elo', $brand);
    }

    /**
     * @param $card
     * @dataProvider getNumbersFromAmex
     */
    public function testaIndetificaoBandeiraAmex($card)
    {
        $brand = (new CrediCardValidator($card))->getBrand()->getName();

        $this->assertEquals('amex', $brand);
    }

    /**
     * @param $card
     * @dataProvider getNumbersFromVisa
     */
    public function testaIndetificaoBandeiraVisa($card)
    {
        $brand = (new CrediCardValidator($card))->getBrand()->getName();

        $this->assertEquals('visa', $brand);
    }

    /**
     * @param $card
     * @dataProvider getNumbersFromDiners
     */
    public function testaIndetificaoBandeiraDiners($card)
    {
        $brand = (new CrediCardValidator($card))->getBrand()->getName();

        $this->assertEquals('dinersclub', $brand);
    }

    /**
     * @param $card
     * @dataProvider getNumbersFromMasterCard
     */
    public function testaIndetificaoBandeiraMasterCard($card)
    {
        $brand = (new CrediCardValidator($card))->getBrand()->getName();

        $this->assertEquals('mastercard', $brand);
    }

}