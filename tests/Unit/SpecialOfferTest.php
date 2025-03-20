<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\SpecialOffer;
use App\Product;

class SpecialOfferTest extends TestCase
{
    public function testNoDiscountForSingleRedWidget(): void
    {
        $offer = new SpecialOffer();
        $products = [new Product('R01', 32.95)];

        $this->assertEquals(0, $offer->apply($products));
    }

    public function testDiscountForTwoRedWidgets(): void
    {
        $offer = new SpecialOffer();
        $products = [new Product('R01', 32.95), new Product('R01', 32.95)];

        $this->assertEquals(16.48, $offer->apply($products));
    }

    public function testNoDiscountForOtherProducts(): void
    {
        $offer = new SpecialOffer();
        $products = [new Product('G01', 24.95), new Product('B01', 7.95)];

        $this->assertEquals(0, $offer->apply($products));
    }
}