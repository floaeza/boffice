<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StatisticData;
class Channel extends Model
{
    use HasFactory;
    
    public function StatisticsData(){
        return $this->belongsToMany(StatisticData::class);
    }


}
