<?php

declare(strict_types=1);

namespace Cleancoders\Rules\Pricing;

use Cleancoders\Item;
use Cleancoders\Product;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class ShoesSaleRule implements PricingRuleInterface
{
    /**
     * @param Item $item
     * @return bool
     */
    public function when(Item $item): bool
    {
        $product = $item->getProduct();
        return $product->isInPromotion()
            && $product->getType() === Product::TYPE['shoes']
            && $item->getQuantity() > 1;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function then(Item $item): void
    {
        $item->updatePriceAfterDiscount($item->getPrice() - ($item->getPrice() * 0.4)); // reduction 40%
    }
}

