<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statistic;

class Device extends Model
{
    use HasFactory;
    public function Statistics(){
        return $this->hasMany(Statistic::class);
    }
}
