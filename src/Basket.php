<?php
class Basket implements BasketInterface
{
    private array $products = [];

    public function __construct(
        private array $productCatalogue,
        private DeliveryChargeRules $deliveryChargeRules,
        private SpecialOfferInterface $specialOffer
    ) {}

    public function add(string $productCode): void
    {
        if (isset($this->productCatalogue[$productCode])) {
            $this->products[] = $this->productCatalogue[$productCode];
        }
    }

    public function total(): float
    {
        $subtotal = array_reduce($this->products, fn($carry, $product) => $carry + $product->getPrice(), 0);
        $discount = $this->specialOffer->apply($this->products);
        $delivery = $this->deliveryChargeRules->calculate($subtotal - $discount);

        return $subtotal - $discount + $delivery;
    }
}