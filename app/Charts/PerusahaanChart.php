<?php

namespace App\Charts;

use App\Models\Jenis_Perusahaan;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PerusahaanChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->chart->lineChart()
            ->addData('Perusahaan', \App\Models\Perusahaan::query()->inRandomOrder()->limit(10)->pluck('id')->toArray())
            ->addData('Jenis_Perusahaan', \App\Models\Perusahaan::query()->inRandomOrder()->limit(10)->pluck('jenis_perusahaan_id')->toArray())
            ->setXAxis(\App\Models\Jenis_Perusahaan::query()->inRandomOrder()->pluck('jenis_perusahaan')->toArray())
            ->setFontColor('#ffffff')
            ->setHeight(400);
    }
}
