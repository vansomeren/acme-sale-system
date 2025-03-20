<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\DeliveryChargeRules;

class DeliveryChargeRulesTest extends TestCase
{
    public function testDeliveryChargeForOrdersUnder50(): void
    {
        $rules = new DeliveryChargeRules();
        $this->assertEquals(4.95, $rules->calculate(49.99));
    }

    public function testDeliveryChargeForOrdersUnder90(): void
    {
        $rules = new DeliveryChargeRules();
        $this->assertEquals(2.95, $rules->calculate(75.00));
    }

    public function testFreeDeliveryForOrdersOver90(): void
    {
        $rules = new DeliveryChargeRules();
        $this->assertEquals(0, $rules->calculate(90.00));
    }
}