<?php

namespace App\Http\Controllers\API;

use App\Concrete\Service\ProductService;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Products\ProductStoreRequest;
use App\Http\Requests\Products\ProductUpdateRequest;
use Illuminate\Http\JsonResponse;

class ProductController extends BaseController
{
    /**
     * @var ProductService
     */
    private $service;

    public function __construct(ProductService $service)
    {
        $this->service = $service;
    }

    /**
     * Product List
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $results = $this->service->getAll();
        return $this->successMessage($results, trans('messages.listed'), 200);
    }

    /**
     * Store a newly created resource in storage.
     * Product Create
     * @param ProductStoreRequest $request
     * @return JsonResponse
     */
    public function store(ProductStoreRequest $request): JsonResponse
    {
        $inputs = $request->validated();
        $results = $this->service->addBy($inputs);

        return $this->successMessage($results, trans('messages.created'), 200);
    }

    /**
     * Display product details
     * Product Detail Show
     * @param int $id
     * @return JsonResponse
     */
    public function show(int $id): JsonResponse
    {
        $results = $this->service->show($id);
        return $this->successMessage($results, trans('messages.showed'), 200);
    }

    /**
     * Update the specified resource in storage.
     * Product Update - by shippingDate
     * @param ProductUpdateRequest $request
     * @param int $id
     * @return JsonResponse
     */
    public function update(ProductUpdateRequest $request, int $id): JsonResponse
    {
        $inputs = $request->validated();
        $results = $this->service->updateBy($inputs);
        return $this->successMessage($results, trans('messages.updated'), 200);
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        $results = $this->service->delete($id);
        return $this->successMessage($results, trans('messages.deleted'), 200);
    }
}
