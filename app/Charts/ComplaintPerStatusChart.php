<?php

namespace App\Charts;


use App\Models\Complaint;
use Illuminate\Support\Facades\DB;

class ComplaintPerStatusChart extends AppChart
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
     * Get the category chart statistics
     *
     */
    public function perStatus()
    {
        $chart = new ComplaintPerStatusChart();

        // Chart declaration
        $chart->labels($this->statusNames())
            ->type('pie')
            ->options(parent::setTitle('Complaints Per Status'));

        // complaint count data set
        $chart->dataset('Complaint Total Number', 'pie', $this->getStatusComplaints())
            ->options([
                'backgroundColor' => ['#00e676 ', '#81c784', '#69f0ae ', '#388e3c','#1b5e20']
            ]);

        return $chart;
    }


    /**
     * Get the name of categories
     *
     * @return \Illuminate\Support\Collection
     */
    private function statusNames()
    {
        return Complaint::groupBy('status')
        ->selectRaw('count(*) as total, status')
        ->get()
        ->pluck('status');
    }

    /**
     * Get category complaint count
     *
     * @return complaint[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    private function getStatusComplaints()
    {
      //info(Complaint::groupBy('status')->select('status',DB::raw('count(*) as total'))->get());

        return Complaint::groupBy('status')
        ->selectRaw('count(*) as total, status')
        ->get()
        ->pluck('total');
    }
}
