<?php

namespace Interfaces;

interface BasketInterface
{
    public function add(string $productCode): void;
    public function total(): float;
}