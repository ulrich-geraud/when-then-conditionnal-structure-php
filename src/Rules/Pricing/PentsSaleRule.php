<?php

declare(strict_types=1);

namespace Cleancoders\Rules\Pricing;

use Cleancoders\Item;
use Cleancoders\Product;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class PentsSaleRule implements PricingRuleInterface
{
    /**
     * @param Item $item
     * @return bool
     */
    public function when(Item $item): bool
    {
        return $item->getProduct()->getType() === Product::TYPE['pents'] && $item->getQuantity() > 5;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function then(Item $item): void
    {
        $item->updatePriceAfterDiscount($item->getPrice() - ($item->getPrice() * 0.8)); // Réduction de 80%
    }
}

