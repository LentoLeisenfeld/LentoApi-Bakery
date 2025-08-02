<?php

namespace Bakery\Controllers;

use Deprecated;

use Lento\Http\Attributes\{Get, Post, Patch, Delete};
use Lento\Routing\Attributes\{Controller, Param};
use Lento\OpenAPI\Attributes\{Tags, Summary};

#[Controller('/products')]
#[Tags('products')]
class ProductsController
{
    #[Get]
    #[Summary('List all products')]
    public function get(): ?string
    {
        return "pong";
    }

    #[Post]
    #[Summary('Create a product')]
    public function post(): ?string
    {
        return "pong";
    }

    #[Get('/{productId}')]
    #[Summary('Get product details')]
    public function getByProductId(
        #[Param] int $productId
    ): ?string {
        return "pong";
    }

    #[Deprecated]
    #[Patch('/{productId}')]
    #[Summary('Update product')]
    public function patchByProductId(
        #[Param] int $productId
    ): ?string
    {
        return "pong";
    }

    #[Delete('/{productId}')]
    #[Summary('Delete a product')]
    public function deleteByProductId(
        #[Param] int $productId
    ): ?string
    {
        return "pong";
    }
}
