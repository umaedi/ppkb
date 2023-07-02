<?php

namespace App\Services;

class CatinService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function get()
    {
        return $this->model->get();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function store($attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id_pendampingan, $data)
    {
        if (is_numeric($id_pendampingan)) {
            $model = $this->model->where('id', $id_pendampingan)->where('pendamping_id', auth()->guard('tpk')->user()->id)->first();
        } else {
            $model = $this->model->where('kode_catin', $id_pendampingan)->where('pendamping_id', auth()->guard('tpk')->user()->id);
        }
        $model->update($data);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->where('id', $id)->where('pendamping_id', auth()->guard('tpk')->user()->id)->first();
        $model->destroy($id);
        return $model;
    }

    public function destroy($kode_catin)
    {
        $model = $this->model->where('kode_catin', $kode_catin)->where('pendamping_id', auth()->guard('tpk')->user()->id);
        $model->delete($kode_catin);
        return $model;
    }

    public function Query()
    {
        return $this->model->query();
    }
}
