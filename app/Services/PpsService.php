<?php

namespace App\Services;

class PpsService
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

    public function store($attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, $data)
    {
        if (is_numeric($id)) {
            $model = $this->model->where('id', $id)->where('pendamping_id', auth()->guard('tpk')->user()->id)->first();
        } else {
            $model = $this->model->where('kode_pasca_persalinan', $id)->where('pendamping_id',  auth()->guard('tpk')->user()->id);
        }
        $model->update($data);
        return $model;
    }

    public function destroy($id)
    {
        if (is_numeric($id)) {
            $model = $this->model->where('id', $id)->where('pendamping_id', auth()->guard('tpk')->user()->id)->first();
            $model->destroy($id);
        } else {
            $model = $this->model->where('kode_pasca_persalinan', $id)->where('pendamping_id', auth()->guard('tpk')->user()->id);
            $model->delete($id);
        }
        return $model;
    }

    public function Query()
    {
        return $this->model->query();
    }
}
