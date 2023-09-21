<?php

declare(strict_types=1);

namespace Cleancoders\Application;

require_once  '../../vendor/autoload.php';

use Cleancoders\Item;
use Cleancoders\Product;
use Cleancoders\ShoppingCart;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class Application
{
    public function main(): string
    {
        $items = [
            [
                'price' => 1200,
                'quantity' => 6,
                'product' => Product::createFrom([
                    'name' => 'Pents',
                    'description' => 'Description',
                    'isInPromotion' => true
                ]),
            ],
            [
                'price' => 1000,
                'quantity' => 2,
                'product' => Product::createFrom([
                    'name' => 'Tennis',
                    'description' => 'Description',
                    'type' => 'shoes',
                    'isInPromotion' => false
                ]),
            ]
        ];

        $totalPrice = $this->getShoppingCart($items)->calculateTotalPrice();

        return "Total Price: $totalPrice \n";
    }

    /**
     * @param array<int, array<string, mixed> $items
     * @return ShoppingCart
     */
    private function getShoppingCart(array $items): ShoppingCart
    {
        $shoppingCart = new ShoppingCart();
        foreach ($items as $itemData) {
            $shoppingCart->addItem(Item::createFrom($itemData));
        }

        return $shoppingCart;
    }
}


/**
 * Result:
 */
$app = new Application();
echo $app->main();
