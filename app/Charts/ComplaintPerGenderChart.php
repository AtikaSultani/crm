<?php

namespace App\Charts;


use App\Models\Complaint;

class ComplaintPerGenderChart extends AppChart
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
     * Get the gender chart statistics
     *
     */
    public function perGender()
    {
        $chart = new ComplaintPerGenderChart();

        // Chart declaration
        $chart->labels(['Male', 'Female'])
            ->type('pie')
            ->options(parent::setTitle('Complaints Per Gender'));

        // complaint count data set
        $chart->dataset('Complaint Total Number', 'pie', $this->getGenderComplaints())
            ->options([
                'backgroundColor' => ['#b2dfdb', '#00796b']
            ]);

        return $chart;
    }


    /**
     * Get gender complaint count
     *
     * @return array
     */
    private function getGenderComplaints()
    {
        $complaints = Complaint::query();

        if (request('province')) {
            $complaints = $complaints->whereProvinceId(request('province'));
        }

        // quarter
        if (request('quarter')) {
            $complaints = $complaints->whereQuarter(request('quarter'));
        }

        // month
        if (request('month')) {
            $year = request('year') ? request('year') : now()->year;

            $complaints = $complaints->whereYear('received_date', $year)
                ->whereMonth('received_date', request('month'));
        }

        // year
        if (request('year')) {
            $complaints = $complaints->whereYear('received_date', request('year'));
        }

        return $complaints->get()->groupBy('gender')
            ->map(function ($group) {
                return $group->count();
            })->values()->all();
    }
}
