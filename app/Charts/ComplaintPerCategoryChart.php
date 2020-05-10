<?php

namespace App\Charts;


use App\Models\BroadCategory;

class ComplaintPerCategoryChart extends AppChart
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
    public function perCategory()
    {
        $chart = new ComplaintPerCategoryChart();

        // Chart declaration
        $chart->labels($this->categoryNames())
            ->type('pie')
            ->options(parent::setTitle('Complaints Per Category'));

        // complaint count data set
        $chart->dataset('Complaint Total Number', 'pie', $this->getCategoryComplaints())
            ->options([
                'backgroundColor' => ['#E6FFFA', '#81E6D9', '#38B2AC', '#2C7A7B','#234E52']
            ]);

        return $chart;
    }


    /**
     * Get the name of categories
     *
     * @return \Illuminate\Support\Collection
     */
    private function categoryNames()
    {
        return BroadCategory::all()->pluck('category_name');
    }

    /**
     * Get category complaint count
     *
     * @return BroadCategory[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    private function getCategoryComplaints()
    {
        return BroadCategory::all()->map(function ($category) {
            return $category->complaints->count();
        });
    }
}
