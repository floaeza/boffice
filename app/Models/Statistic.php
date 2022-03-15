<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Channel;
use App\Models\Location;
use App\Models\Device;

class Statistic extends Model
{
    use HasFactory;
    public function Channel(){
        return $this->belongsTo(Channel::class);
    }
    public function Location(){
        return $this->belongsTo(Location::class);
    }
    public function Device(){
        return $this->belongsTo(Device::class);
    }
    public function getTopChannel(){
        $channelTop = Statistic::select(DB::raw('SUM(statistics.time) AS timeView'),'channels.name AS nombreCanal')
        ->join('channels', 'statistics.channel_id', '=', 'channels.id')
        ->groupBy('statistics.channel_id')
        ->where('statistics.type', '=', 'TV')
        ->orderBy('timeView', 'desc')
        ->first();
        return $channelTop;
    }
    public function getTopDevice(){
        $deviceTop = Statistic::select(DB::raw('SUM(statistics.time) AS timeView'), 'devices.mac_address AS MAC')
        ->join('devices', 'statistics.device_id', '=', 'devices.id')
        ->groupBy('statistics.device_id')
        ->where('statistics.type', '=', 'TV')
        ->orderBy('timeView', 'desc')
        ->first();
        return $deviceTop;
    }
    public function getTopLocation(){
        $locationTop = Statistic::select(DB::raw('SUM(statistics.time) AS timeView'), 'locations.name AS location')
        ->join('locations', 'statistics.location_id', '=', 'locations.id')
        ->groupBy('statistics.location_id')
        ->where('statistics.type', '=', 'TV')
        ->orderBy('timeView', 'desc')
        ->first();
        return $locationTop;
    }
    public function getTopSchedule(){
        $scheduleTop = Statistic::select('statistics.start AS inicio')
        ->selectRaw('COUNT(*) AS count')
        ->groupBy('start')
        ->orderByDesc('count')
        ->limit(1)
        ->first();
        return $scheduleTop;
    }
}
