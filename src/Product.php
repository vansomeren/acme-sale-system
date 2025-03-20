<?php

class Product
{
    public function __construct(
        private string $code,
        private float  $price
    ) {}

    public function getCode(): string
    {
        return $this->code;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}