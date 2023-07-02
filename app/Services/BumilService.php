<?php

namespace App\Services;

class BumilService
{
    protected $model;
    public function __construct($model)
    {
        $this->model = $model;
    }

    public function store($attributes)
    {
        return $this->model->create($attributes);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function update($id_bumil, $data)
    {
        if (is_numeric($id_bumil)) {
            $model = $this->model->where('id', $id_bumil)->where('pendamping_id', auth()->guard('tpk')->user()->id)->first();
        } else {
            $model = $this->model->where('kode_bumil', $id_bumil)->where('pendamping_id',  auth()->guard('tpk')->user()->id);
        }
        $model->update($data);
        return $model;
    }

    public function destroy($id)
    {
        $model = $this->model->where('id', $id)->where('pendamping_id', auth()->guard('tpk')->user()->id)->first();
        $model->destroy($id);
        return $model;
    }

    public function delete($kode_bumil)
    {
        $model = $this->model->where('kode_bumil', $kode_bumil)->where('pendamping_id', auth()->guard('tpk')->user()->id);
        $model->delete($kode_bumil);
        return $model;
    }

    public function Query()
    {
        return $this->model->query();
    }
}
