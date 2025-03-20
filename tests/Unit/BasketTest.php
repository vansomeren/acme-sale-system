<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Basket;
use App\DeliveryChargeRules;
use App\SpecialOffer;
use App\Product;

class BasketTest extends TestCase
{
    private array $productCatalogue;

    protected function setUp(): void
    {
        $this->productCatalogue = [
            'R01' => new Product('R01', 32.95),
            'G01' => new Product('G01', 24.95),
            'B01' => new Product('B01', 7.95),
        ];
    }

    public function testAddProduct(): void
    {
        $basket = new Basket($this->productCatalogue, new DeliveryChargeRules(), new SpecialOffer());
        $basket->add('R01');
        $basket->add('G01');

        $this->assertCount(2, $basket->getProducts());
    }

    public function testTotalWithNoSpecialOffer(): void
    {
        $basket = new Basket($this->productCatalogue, new DeliveryChargeRules(), new SpecialOffer());
        $basket->add('B01');
        $basket->add('G01');

        $this->assertEquals(37.85, $basket->total());
    }

    public function testTotalWithSpecialOffer(): void
    {
        $basket = new Basket($this->productCatalogue, new DeliveryChargeRules(), new SpecialOffer());
        $basket->add('R01');
        $basket->add('R01');

        $this->assertEquals(54.37, $basket->total());
    }
}