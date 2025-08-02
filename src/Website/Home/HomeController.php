<?php

namespace Bakery\Website\Home;

use Lento\Http\View;
use Lento\Http\Attributes\{Get, Post};
use Lento\OpenAPI\Attributes\{Summary, Tags};
use Lento\Routing\Attributes\{Controller};

#[Controller]
#[Tags(['orders'])]
class HomeController
{
    #[Get]
    public function ping(): View
    {
        $viewModel = new HomeViewModel();
        $viewModel->test = 'Hello World!';

        return new View('HomePage', $viewModel);
    }
}
