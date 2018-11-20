<?php

namespace App\Widgets;

use App\Product;
use Arrilot\Widgets\AbstractWidget;

class Popular extends AbstractWidget
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
    public function run()
    {
        $products = Product::where('featured', true)->take(8)->inRandomOrder()->get();

        return view('widgets.popular', [
            'config' => $this->config,
            'products' => $products,
        ]);
    }
}
