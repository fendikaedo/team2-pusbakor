<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ProyekChart
{
    protected $ProyekChart;

    public function __construct(LarapexChart $ProyekChart)
    {
        $this->ProyekChart = $ProyekChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        return $this->ProyekChart->areaChart()
        ->addData('Total Proyek', \App\Models\Proyek::query()->inRandomOrder()->limit(12)->pluck('id')->toArray())
        ->setXAxis(\App\Models\Kecamatan::query()->inRandomOrder()->pluck('nama_kecamatan')->toArray())
        ->setFontColor('#ffffff')
        ->setHeight(300);
    }
}
