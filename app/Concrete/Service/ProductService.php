<?php

namespace App\Concrete\Service;

use App\Concrete\Repository\ProductRepository;
use App\Infrastructure\Service\IProductService;

class ProductService extends BaseService implements IProductService
{
    /**
     * @var ProductRepository
     */
    private $repository;

    /**
     * ProductService constructor.
     *
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        parent::__construct($repository);
        $this->repository = $repository;
    }

    /**
     * Get all products
     * @return \App\Models\ProductModel[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->repository->getAll();
    }

    /**
     * Get product by Id
     * @param int $id
     * @return mixed|void
     */
    public function show(int $id)
    {
        return $this->repository->show($id);
    }

    /**
     * Create new product
     * @param array $data
     * @return mixed|void
     */
    public function addBy(array $data)
    {
        return $this->repository->addBy($data);
    }

    /**
     * Update product
     * @param array $data
     * @return mixed
     */
    public function updateBy(array $data)
    {
        return $this->repository->updateBy($data);
    }

    /**
     * Delete product
     * @param int $id
     */
    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }
}
