<?php

namespace App\Services;

class TpkService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($id, $data)
    {
        $model =  $this->model->find($id);
        $model->update($data);
        return $model;
    }
}
