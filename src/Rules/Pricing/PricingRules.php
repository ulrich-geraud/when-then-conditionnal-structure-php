<?php

declare(strict_types=1);

namespace Cleancoders\Rules\Pricing;

use Cleancoders\Item;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
abstract class PricingRules
{
    /**
     * @var array<int, PricingRuleInterface>
     */
    private static array $rules = [
        PromotionRule::class,
        FlashSaleRule::class,
        PentsSaleRule::class,
        ShoesSaleRule::class,
    ];

    /**
     * @var array<int, Item> $items
     */
    private array $items;

    /**
     * @param Item $item
     * @return void
     */
    public static function applyRulesOnItem(Item $item): void
    {
        foreach (self::$rules as $ruleClassName) {
            $rule = new $ruleClassName();
            if ($rule->when($item)) {
                $rule->then($item);
            }
        }
    }
}

