<?php

namespace App\Services;

class BaseService implements  serviceInterface
{
    public  $repository;

    public function all()
    {
        return $this->repository->all();
        // TODO: Implement all() method.
    }

    public function find(int $id)
    {
        return $this->repository->find($id);
        // TODO: Implement find() method.
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
        // TODO: Implement create() method.
    }

    public function update(array $data, $id)
    {
        return $this->repository->update($data,$id);
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
        // TODO: Implement delete() method.
    }
    public function searchAndPaginate($searchBy,$keyword,$perPage=5){
        return $this->repository->searchAndPaginate($searchBy,$keyword,$perPage);
    }
}
