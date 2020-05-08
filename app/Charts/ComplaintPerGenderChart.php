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
                'backgroundColor' => ['#FEB2B2', '#F56565']
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
        $maleCount = Complaint::where('gender', 'Male')->count();
        $femaleCount = Complaint::where('gender', 'Female')->count();

        return [$maleCount, $femaleCount];
    }
}
