<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    protected $dates = [
        'date'
    ];

    public function getTotalScoreAttribute()
    {
        return $this->jap_sco + $this->soc_sco + $this->mat_sco + $this->sci_sco + $this->eng_sco;
    }

    public function getTotalScoreAveAttribute()
    {
        return $this->jap_ave + $this->soc_ave + $this->mat_ave + $this->sci_ave + $this->eng_ave;
    }
}
