<?php

namespace App\Concrete\Service;

use App\Infrastructure\Service\IService;
use Illuminate\Database\Eloquent\Model;

class BaseService implements IService
{

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function add(Model $model)
    {
        // TODO: Implement add() method.
    }

    public function show(int $id)
    {
        // TODO: Implement show() method.
    }

    public function addBy(array $data)
    {
        // TODO: Implement addBy() method.
    }

    public function update(Model $model, int $id)
    {
        // TODO: Implement update() method.
    }

    public function updateBy(array $data)
    {
        // TODO: Implement updateBy() method.
    }

    public function delete(int $id)
    {
        // TODO: Implement delete() method.
    }
}
