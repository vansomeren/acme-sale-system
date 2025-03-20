<?php

namespace Interfaces;

interface SpecialOfferInterface
{
    public function apply(array $products): float;
}