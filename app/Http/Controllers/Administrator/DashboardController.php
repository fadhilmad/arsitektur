<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Libraries\System;
use App\Models\Administrator\DashboardModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $system;

    public function __construct()
    {
        $this->system = new System();
    }

    public function index()
    {
        return view('administrator.dashboard.index', [
            'interior' => DashboardModel::countProjectInterior(),
            'architecture' => DashboardModel::countProjectArsitektur(),
            'miscellaneouse' => DashboardModel::countProjectMiscellanouse(),
            'commercial' => DashboardModel::countProjectCommercial(),
            'residential' => DashboardModel::countProjectResidential(),
            'retail' => DashboardModel::countProjectRetail()
        ]);
    }

    public function getDataChart(Request $request)
    {
        $tahunData = $request->input('tahun');

        return $this->system->responseServer(200, [
            'statusCode' => 200,
            'message' => 'Data telah berhasil diambil',
            'data' => [
                'interior' => DashboardModel::countProjectInterior($tahunData),
                'architecture' => DashboardModel::countProjectArsitektur($tahunData),
                'miscellaneouse' => DashboardModel::countProjectMiscellanouse($tahunData),
                'commercial' => DashboardModel::countProjectCommercial($tahunData),
                'residential' => DashboardModel::countProjectResidential($tahunData),
                'retail' => DashboardModel::countProjectRetail($tahunData)
            ]
        ]);
    }
}
