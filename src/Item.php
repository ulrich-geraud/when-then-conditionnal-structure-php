<?php

declare(strict_types=1);

namespace Cleancoders;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class Item
{
    private function __construct(
        private float   $price,
        private readonly int     $quantity,
        private readonly Product $product,
    ) {}

    /**
     * @param array<string, float|int|Product> $itemData
     * @return self
     */
    public static function createFrom(array $itemData): self
    {
        return new self(
            price: $itemData['price'],
            quantity: $itemData['quantity'],
            product: $itemData['product']
        );
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param float $newPrice
     * @return $this
     */
    public function updatePriceAfterDiscount(float $newPrice): self
    {
        $this->price = $newPrice;

        return $this;
    }
}