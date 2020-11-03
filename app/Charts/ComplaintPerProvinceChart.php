<?php

namespace App\Charts;

use App\Models\Province;

class ComplaintPerProvinceChart extends AppChart
{

    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get the province chart statistics
     *
     */
    public function perProvince()
    {
        $chart = new ComplaintPerProvinceChart();

        // Chart declaration
        $chart->labels($this->provinceNames())
            ->type('bar')
            ->options(parent::setTitle('Complaints Per Province'));

        // complaint count data set
        $chart->dataset('Complaint Total Number', 'bar', $this->getProvinceComplaints())
            ->options(parent::setDarkBackground());

        return $chart;
    }


    /**
     * Get the name of provinces
     *
     * @return array|\Illuminate\Support\Collection
     */
    private function provinceNames()
    {
        if (request('province')) {
            return [Province::find(request('province'))->province_name];
        }

        return Province::all()->pluck('province_name');
    }

    /**
     * Get province complaint count
     *
     * @return Province[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    private function getProvinceComplaints()
    {

        if (request('province')) {
            return [Province::find(request('province'))->complaints->count()];
        }

        return Province::all()->map(function ($province) {
            return $province->complaints->count();
        });
    }
}
