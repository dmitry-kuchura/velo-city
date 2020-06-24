<?php

namespace App\Repositories;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\Enum\ProductConstants;

class ProductsRepository
{
    protected $model = Product::class;

    public function all()
    {
        return $this->model::paginate(ProductConstants::PAGINATE_LIMIT);
    }

    public function list()
    {

    }

    public function search(string $query)
    {
        return $this->model::where('status', ProductConstants::STATUS_ACTIVE)
            ->where('name', 'like', '%' . $query . '%')
            ->paginate(ProductConstants::PAGINATE_LIMIT);
    }

    public function find($id)
    {
        $product = $this->model::where('id', $id)->first();

        return new ProductResource($product);
    }

    public function category($alias)
    {
        return $this->model::
        join('catalog', 'catalog.id', '=', 'products.category_id')
            ->select('products.*')
            ->where('catalog.alias', $alias)
            ->paginate(12);
    }

    public function store($id, $data)
    {
        return $this->model::where('id', $id)->update([
            'name' => $data['name'],
            'alias' => $data['alias'],
            'category_id' => $data['category_id'],
            'status' => $data['status'],
            'new' => $data['new'],
            'sale' => $data['sale'],
            'top' => $data['top'],
            'available' => $data['available'],
            'cost' => $data['cost'],
            'cost_old' => $data['cost_old'],
            'brand' => $data['brand'],
            'artikul' => $data['artikul'],
            'image' => $data['image'],
            'specifications' => $data['specifications'],
            'information' => $data['information'],
            'title' => $data['title'],
            'description' => $data['description'],
            'keywords' => $data['keywords'],
        ]);
    }

    public function create($data)
    {
        $model = new $this->model;

        $model->name = $data['name'];
        $model->alias = $data['alias'];
        $model->category_id = $data['category_id'];
        $model->status = $data['status'];
        $model->new = $data['new'];
        $model->sale = $data['sale'];
        $model->top = $data['top'];
        $model->available = $data['available'];
        $model->cost = $data['cost'];
        $model->cost_old = $data['cost_old'];
        $model->brand = $data['brand'];
        $model->artikul = $data['artikul'];
        $model->image = $data['image'];
        $model->specifications = $data['specifications'];
        $model->information = $data['information'];
        $model->title = $data['title'];
        $model->description = $data['description'];
        $model->keywords = $data['keywords'];

        return $model->save();
    }

    public function destroy($id)
    {
        return $this->model::where('id', $id)->delete();
    }

    public function updateImage($data)
    {
        return $this->model::where('id', $data['id'])->update(['image' => $data['link']]);
    }

    public function getFeatured(int $limit)
    {
        return $this->model::where('status', ProductConstants::STATUS_ACTIVE)
            ->whereNotNull('image')
            ->whereIn('category_id', ProductConstants::CYCLING_CATEGORIES)
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }

    public function getSpecial(int $limit)
    {
        return $this->model::where('status', ProductConstants::STATUS_ACTIVE)
            ->where(function ($query) {
                $query->where('sale', ProductConstants::IS_SALE)
                    ->orWhere('top', ProductConstants::IS_TOP);
            })
            ->whereNotNull('image')
            ->whereIn('category_id', ProductConstants::EQUIPMENT_CATEGORIES)
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }

    public function getMostViewed(int $limit)
    {
        return $this->model::where('status', ProductConstants::STATUS_ACTIVE)
            ->whereNotNull('image')
            ->whereIn('category_id', ProductConstants::CYCLING_CATEGORIES)
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }

    public function getLatest(int $limit)
    {
        return $this->model::where('status', ProductConstants::STATUS_ACTIVE)
            ->where('new', ProductConstants::IS_NEW)
            ->whereIn('category_id', ProductConstants::COMPONENTS_CATEGORIES)
            ->whereNotNull('image')
            ->limit($limit)
            ->inRandomOrder()
            ->get();
    }
}
