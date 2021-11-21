<?php

namespace App\Concrete\Repository;

use App\Models\ProductModel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductRepository
{
    /**
     * Get all products
     */
    public function getAll()
    {
        return ProductModel::all()->toArray();
    }

    /**
     * Get by Product ID
     * @param int $id
     * @return mixed
     */
    public function show(int $id)
    {
        return ProductModel::where('id', $id)->get();
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function addBy(array $data)
    {
        return ProductModel::create([
            'provider_id' => Auth::id(),
            'name' => $data['name'],
            'order_code' => Auth::id() . "-" . Str::random(15) . rand(0, 5),
            'quantity' => $data['quantity'],
            'address' => $data['address'],
            'price' => $data['price'],
            'shipping_date' => Carbon::now()->addDay(3),
        ]);
    }

    /**
     * @param array $data
     */
    public function updateBy(array $data)
    {
        return ProductModel::where('id', $data['id'])
            ->whereDate('shipping_date', '>', Carbon::now())->
            update([
                'name' => $data['name'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'address' => $data['address']
            ]);
    }

    /**
     * Delete product
     * @param int $id
     * @return mixed
     */
    public function delete(int $id)
    {
        return ProductModel::where('id', $id)->delete();
    }
}
