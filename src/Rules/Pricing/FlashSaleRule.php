<?php

declare(strict_types=1);

namespace Cleancoders\Rules\Pricing;

use Cleancoders\Item;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class FlashSaleRule implements PricingRuleInterface
{
    /**
     * @param Item $item
     * @return bool
     */
    public function when(Item $item): bool
    {
        return $item->getProduct()->isInPromotion() && $item->getQuantity() > 5;
    }

    /**
     * @param Item $item
     * @return void
     */
    public function then(Item $item): void
    {
        $item->updatePriceAfterDiscount($item->getPrice() - ($item->getPrice() * 0.55)); // Réduction de 55%
    }
}

