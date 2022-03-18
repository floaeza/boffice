<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;
use App\Models\Device;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

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
        $diskInfo       = $statistic->getServerInfo('getDiskInfo');
        $diskInfo       = collect(json_decode($diskInfo, true));
        dd($diskInfo);
        return view('welcome')->with(compact('topLocation', 'topChannel', 'topSchedule', 'countDevices','diskInfo'));
    }
}
