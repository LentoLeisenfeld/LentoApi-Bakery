<?php

namespace Bakery\Controllers;

use Lento\Http\Attributes\{Get};
use Lento\OpenAPI\Attributes\{Summary, Tags};
use Lento\Routing\Attributes\{Controller, Param};

#[Controller('/customers')]
class CustomersController
{
    #[Get]
    #[Summary('List customers')]
    #[Tags(['customers'])]
    public function get(): ?string
    {
        return "pong";
    }


    #[Get('/{customerId}/orders')]
    #[Summary('List customer orders')]
    #[Tags(['orders', 'customers'])]
    public function getOrdersByCustomerId(#[Param] string $customerId): string
    {
        return $customerId;
    }
}
