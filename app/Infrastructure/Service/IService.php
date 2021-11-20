<?php

namespace App\Infrastructure\Service;

use Illuminate\Database\Eloquent\Model;

interface IService
{
    public function getAll();

    public function add(Model $model);

    public function addBy(array $data);

    public function show(int $id);

    public function update(Model $model, int $id);

    public function updateBy(array $data);

    public function delete(int $id);
}
