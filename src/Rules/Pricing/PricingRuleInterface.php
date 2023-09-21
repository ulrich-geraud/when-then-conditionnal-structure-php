<?php

declare(strict_types=1);

namespace Cleancoders\Rules\Pricing;

use Cleancoders\Item;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
interface PricingRuleInterface
{
    /**
     * @param Item $item
     * @return bool
     */
    public function when(Item $item): bool;

    /**
     * @param Item $item
     * @return void
     */
    public function then(Item $item): void;
}

