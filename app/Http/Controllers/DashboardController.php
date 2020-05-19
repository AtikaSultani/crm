<?php


namespace App\Http\Controllers;


use App\Charts\ComplaintPerCategoryChart;
use App\Charts\ComplaintPerGenderChart;
use App\Charts\ComplaintPerProjectChart;
use App\Charts\ComplaintPerProvinceChart;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Get charts for dashboard page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        $province = new ComplaintPerProvinceChart();
        $province = $province->perProvince();

        $category = new ComplaintPerCategoryChart();
        $category = $category->perCategory();

        $gender = new ComplaintPerGenderChart();
        $gender = $gender->perGender();

        $project = new ComplaintPerProjectChart();
        $project = $project->perProject();

        return view('dashboard', compact('province', 'category', 'gender', 'project'));
    }
}