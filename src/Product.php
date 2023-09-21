<?php

declare(strict_types=1);

namespace Cleancoders;

/**
 * @author Ulrich Geraud A <ulrich.ahogla@hotmail.com>
 */
final class Product
{
    public const TYPE = [
        'shoes' => 'shoes',
        'pents' => 'pents',
        'coat' => 'coat',
        'default' => '',
    ];

    private function __construct(
        private readonly string $name,
        private readonly string $description,
        private readonly string $type,
        private readonly bool   $isInPromotion = false,
    ) {}

    /**
     * @param array<string, string|bool> $productData
     * @return self
     */
    public static function createFrom(array $productData): self {
        return new self(
            name: $productData['name'],
            description: $productData['description'],
            type: $productData['type'] ?? self::TYPE['default'],
            isInPromotion: $productData['isInPromotion'],
        );
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isInPromotion(): bool
    {
        return $this->isInPromotion;
    }
}