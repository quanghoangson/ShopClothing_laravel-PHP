<?php

namespace App\Repositories;

use Illuminate\Contracts\Container\BindingResolutionException;

abstract class BaseRepository implements  RepositoryInterface
{
    protected mixed $model;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->model= app()->make (
            $this->getModel()
        );
    }
    abstract  public function  getModel();

    public function all()
    {
        return  $this->model->all();
    }

    public function find(int $id)
    {
        // TODO: Implement find() method.
        return  $this->model->findOrFail($id);
    }

    public function create(array $data)
    {
        // TODO: Implement create() method.
        return  $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $object= $this->model->find($id);
        // TODO: Implement update() method.
        return  $object->update($data);
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $object= $this->model->find($id);
        return  $object->delete();
    }
    public function searchAndPaginate($searchBy,$keyword,$perPage=5){
        return $this->model
            ->where($searchBy,'like','%'.$keyword.'%')
            ->orderBy('id','desc')
            ->paginate($perPage)
            ->appends(['search'=>$keyword]);
    }
}
