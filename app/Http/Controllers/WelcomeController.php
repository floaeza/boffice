<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;
use App\Models\Device;

class WelcomeController extends Controller
{
    //
    public function index(){
        $statistic      = new Statistic;
        $devices        = Device::all();
        $countDevices   = count($devices);
        $topLocation    = $statistic->getTopLocation();
        $topChannel     = $statistic->getTopChannel();
        $topSchedule    = $statistic->getTopSchedule();
        return view('welcome', compact('topLocation', 'topChannel', 'topSchedule', 'countDevices'));
    }
}
