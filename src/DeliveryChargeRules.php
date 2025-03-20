<?php

class DeliveryChargeRules
{
    public function calculate(float $total): float
    {
        if ($total >= 90) {
            return 0;
        } elseif ($total >= 50) {
            return 2.95;
        } else {
            return 4.95;
        }
    }
}