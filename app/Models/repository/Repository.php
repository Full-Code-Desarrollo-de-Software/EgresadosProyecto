<?php

namespace App\Models\repository;

use Illuminate\Database\Eloquent\Model;

class Repository
{

    protected $model;
    protected $relations;
    private $query;

    function __construct(Model $model, array $query = [], array $relations = [])
    {
        $this->model = $model;
        $this->query = $query;
        $this->relations = $relations;
    }

    public function getReducedQuery()
    {
        if (empty($this->query)) {
            return $this->model->select('*')->get();
        } else {
            return $this->model->select($this->query)->get();
        }
    }

    public function save($request = [])
    {
        $this->model->create($request);
    }
}