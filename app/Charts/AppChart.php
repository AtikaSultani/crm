<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class AppChart extends Chart
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set the title of chart
     *
     * @param $title
     * @return array
     */
    public function setTitle($title)
    {
        return [
            'title' => [
                'display'   => true,
                'text'      => $title,
                'fontColor' => '#4281A4',
                'fontSize'  => '16',
                'fontStyle' => 'normal',
            ]
        ];
    }


    /**
     * Set the chart background to blue light
     *
     * @return array
     */
    public function setLightBackground()
    {
        return [
            'backgroundColor' => '#508EAD',
            'responsive'      => true
        ];
    }


    /**
     * Set the chart background to blue dark
     *
     * @return array
     */
    public function setDarkBackground()
    {
        return [
            'backgroundColor' => '#4281A4',
            'responsive'      => true
        ];
    }
}
