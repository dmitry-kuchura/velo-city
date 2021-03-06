<?php

namespace App\Widgets;

use App\Repositories\ProductsRepository;
use Arrilot\Widgets\AbstractWidget;

class FeaturedProducts extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run(ProductsRepository $productsRepository)
    {
        $items = $productsRepository->getFeatured(10);

        return view('widgets.featured-products', [
            'items' => $items,
            'config' => $this->config,
        ]);
    }
}
