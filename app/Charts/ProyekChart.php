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
        ->addData('Proyek', \App\Models\Proyek::query()->inRandomOrder()->limit(10)->pluck('id')->toArray())
        ->addData('Kecamatan', \App\Models\Proyek::query()->inRandomOrder()->limit(12)->pluck('kecamatan_id')->toArray())
        ->setXAxis(\App\Models\Kecamatan::query()->inRandomOrder()->pluck('nama_kecamatan')->toArray())
        ->setFontColor('#ffffff')
        ->setHeight(400);
    }
}
