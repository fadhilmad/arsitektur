<?php

namespace App\Http\Libraries;

class Select2
{
    private $results;

    public function __construct($data)
    {
        $this->results = $data;
    }

    public function merge($arrays = [])
    {
        if ($arrays) {
            $this->results = array_merge(
                $arrays,
                $this->results
            );
        }

        return $this;
    }

    public function render()
    {
        $id = request()->input('selected');
        $results = array_map(function ($arr) use ($id) {
            if ($arr->id == $id) $arr->selected = true;
            return $arr;
        }, $this->results);

        return response()->json([
            'statusCode' => 200,
            'message' => 'Data berhasil diambil',
            'data' => $results ?: []
        ], 200, ['Content-type' => 'application/json'], JSON_PRETTY_PRINT);
    }
}
