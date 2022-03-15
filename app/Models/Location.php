<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Statitic;

class Location extends Model
{
    use HasFactory;
    public function Statitics(){
        return $this->hasMany(Statitics::class);
    }
}
