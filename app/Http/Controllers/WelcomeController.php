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
    public function welcome(){   
        $statistic      = new Statistic;
        $devices        = Device::all();
        $countDevices   = count($devices);
        $topLocation    = $statistic->getTopLocation();
        $topChannel     = $statistic->getTopChannel();
        $topSchedule    = $statistic->getTopSchedule();
        // $diskInfo       = $statistic->getServerInfo('getDiskInfo');
        // $diskInfo       = collect(json_decode($diskInfo, true));
        // $cpuInfo        = $statistic->getServerInfo('getCpuInfo');
        // $cpuInfo        = collect(json_decode($cpuInfo, true));
        // $httpdInfo      = $statistic->getServerInfo('getServiceInfo,systemctl status httpd.service');
        // $httpdInfo      = collect(json_decode($httpdInfo, true));
        // $mariaInfo      = $statistic->getServerInfo('getServiceInfo,systemctl status mariadb.service');
        // $mariaInfo      = collect(json_decode($mariaInfo, true));
        $phpInfo        = $statistic->getServerInfo('getServiceInfo,systemctl status php-fpm.service');
        $phpInfo        = collect(json_decode($phpInfo, true));

        dd($phpInfo['Active']);

        
        return view('welcome');
    }
    public function index(){

    }
}
