<?php

declare(strict_types=1);

namespace Cleancoders;

use Cleancoders\Rules\Pricing\PricingRules;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class ShoppingCart
{
    /**
     * @var array<int, Item> $items
     */
    private array $items;

    /**
     * @return float
     */
    public function calculateTotalPrice(): float
    {
        $priceTotal = 0;

        foreach ($this->items as $item) {
            PricingRules::applyRulesOnItem($item);
            $priceTotal += $item->getPrice() * $item->getQuantity();
        }

        return $priceTotal;
    }

    /**
     * @param Item $item
     * @return $this
     */
    public function addItem(Item $item): self
    {
        $this->items[] = $item;

        return $this;
    }
}


