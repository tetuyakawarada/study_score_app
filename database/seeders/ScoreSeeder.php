<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [[
            'event' => '1学年 1学期 期末テスト',
            'date' => '2022/7/31',
            'body' => '',

            'jap_sco' => 57,
            'soc_sco' => 50,
            'mat_sco' => 73,
            'sci_sco' => 55,
            'eng_sco' => 55,
            'mus_sco' => 84,
            'art_sco' => 40,
            'phy_sco' => 62,
            'hom_sco' => 00,

            'jap_ave' => 65.1,
            'soc_ave' => 64.1,
            'mat_ave' => 72.5,
            'sci_ave' => 64.9,
            'eng_ave' => 64.2,
            'mus_ave' => 70.6,
            'art_ave' => 57.8,
            'phy_ave' => 61.3,
            'hom_ave' => 00.0,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]];
        DB::table('scores')->insert($param);
    }
}
