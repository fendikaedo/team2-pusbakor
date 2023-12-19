<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class PerusahaanChart
{
    protected $PerusahaanChart;

    public function __construct(LarapexChart $PerusahaanChart)
    {
        $this->PerusahaanChart = $PerusahaanChart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        return $this->PerusahaanChart->lineChart()
            ->addData('Perusahaan', \App\Models\Perusahaan::query()->inRandomOrder()->limit(10)->pluck('id')->toArray())
            ->addData('Jenis_Perusahaan', \App\Models\Perusahaan::query()->inRandomOrder()->limit(10)->pluck('jenis_perusahaan_id')->toArray())
            ->setFontColor('#ffffff')
            ->setHeight(300);
    }
}
