<?php

namespace App\Charts;


use App\Models\Project;

class ComplaintPerProjectChart extends AppChart
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
     * Get the project chart statistics
     *
     */
    public function perProject()
    {
        $chart = new ComplaintPerProjectChart();

        // Chart declaration
        $chart->labels($this->projectNames())
            ->type('bar')
            ->options(parent::setTitle('Complaints Per Category'));

        // complaint count data set
        $chart->dataset('Complaint Total Number', 'bar', $this->getProjectComplaints())
            ->options(parent::setLightBackground());

        return $chart;
    }

    /**
     * Get the name of projects
     *
     * @return \Illuminate\Support\Collection
     */
    private function projectNames()
    {
        return Project::all()->pluck('project_name');
    }

    /**
     * Get category complaint count
     *
     * @return Project[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
     */
    private function getProjectComplaints()
    {
        return Project::all()->map(function ($project) {
            return $project->complaints->count();
        });
    }
}
