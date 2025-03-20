<?php
class SpecialOffer implements SpecialOfferInterface
{
    public function apply(array $products): float
    {
        $redWidgets = array_filter($products, fn($product) => $product->getCode() === 'R01');
        $discount = 0;

        if (count($redWidgets) >= 2) {
            $discount = $redWidgets[0]->getPrice() * 0.5;
        }

        return $discount;
    }
}