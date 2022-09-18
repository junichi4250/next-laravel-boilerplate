<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Product as ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * 商品一覧を取得
     *
     * @responsefile responses/product.index.json
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection|\Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $products = Product::all();

        return ProductResource::collection($products);
    }

    public function get($id)
    {

    }

    public function create(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }

}
