<?php

namespace Bakery\Controllers;

use Lento\Http\Attributes\{Get, Post};
use Lento\OpenAPI\Attributes\{Summary, Tags};
use Lento\Routing\Attributes\{Controller};

#[Controller('/orders')]
#[Tags(['orders'])]
class OrdersController
{
    #[Post]
    #[Summary('Place an order')]
    public function placeOrder(): ?string
    {
        return "pong";
    }

    #[Get('/{orderId}')]
    #[Summary('Get order details')]
    public function ping(): ?string
    {
        return "pong";
    }
}