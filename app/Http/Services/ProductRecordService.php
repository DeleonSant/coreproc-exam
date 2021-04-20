<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductRecordService
{
    public static function create(
        $name,
        $price,
        $description,
        $isActive
    ) {
        $product = new Product;
        $product->setName($name);
        $product->setPrice($price);
        $product->setDescription($description);
        $product->setIsActive($isActive);
        $product->save();
        return $product;
    }

    public static function update(
        Product $product,
        $name,
        $price,
        $description,
        $isActive
    ) {
        $tmpProduct = clone $product;
        $tmpProduct->setName($name);
        $tmpProduct->setPrice($price);
        $tmpProduct->setDescription($description);
        $tmpProduct->setIsActive($isActive);
        $tmpProduct->save();
        return $tmpProduct;
    }

    public static function delete(Product $product)
    {
        $product->delete();
        return $product;
    }
}
