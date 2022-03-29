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
        return view('welcome');
    }
    public function index(){
        $statistic      = new Statistic;
        $devices        = Device::all();
        $countDevices   = count($devices);
        $topLocation    = $statistic->getTopLocation();
        $topChannel     = $statistic->getTopChannel();
        $topSchedule    = $statistic->getTopSchedule();
        $diskInfo       = $statistic->getServerInfo('getDiskInfo');
        $diskInfo       = collect(json_decode($diskInfo, true));
        $cpuInfo        = $statistic->getServerInfo('getCpuInfo');
        $cpuInfo        = collect(json_decode($cpuInfo, true));
        $httpdInfo      = $statistic->getServerInfo('getServiceInfo,systemctl status httpd.service');
        $httpdInfo      = json_decode($httpdInfo, true);
        $mariaInfo      = $statistic->getServerInfo('getServiceInfo,systemctl status mariadb.service');
        $mariaInfo      = json_decode($mariaInfo, true);
        $phpInfo        = $statistic->getServerInfo('getServiceInfo,systemctl status php-fpm.service');
        $phpInfo        = json_decode($phpInfo, true);
        $data = array();

        foreach ($phpInfo[1] as $key) {
            if ($key[0] == 'Activo') {
                $data['PHP']= 'Activo';
            }elseif ($key[0] == 'Dead') {
                $data['PHP'] = 'Inactivo';
            }
        }
        foreach ($mariaInfo[1] as $key) {
            if ($key[0] == 'Activo') {
                $data['DB']= 'Activo';
            }elseif ($key[0] == 'Dead') {
                $data['DB'] = 'Inactivo';
            }
        }
        foreach ($httpdInfo[1] as $key) {
            if ($key[0] == 'Activo') {
                $data['HTTP']= 'Activo';
            }elseif ($key[0] == 'Dead') {
                $data['HTTP'] = 'Inactivo';
            }
        }

        $timeRunningPHP             = explode(';', $phpInfo[1][0][1]);
        $timeRunningHTTP            = explode(';', $httpdInfo[1][0][1]);
        $timeRunningDB              = explode(';', $mariaInfo[1][0][1]);

        preg_match_all('!\d+!', $phpInfo[1][2][0], $phpTasks);
        preg_match_all('!\d+!', $httpdInfo[1][2][0], $httpTasks);
        preg_match_all('!\d+!', $mariaInfo[1][2][0], $dbTasks);

        $data['PHP']                = ['status'      =>$data['PHP'], 
                                       'timeRunning' =>$timeRunningPHP[1],
                                       'tasks'      =>$phpTasks[0][0],
                                       'maxTasks'   =>$phpTasks[0][1]];
        $data['HTTP']               = ['status'      =>$data['HTTP'], 
                                       'timeRunning' =>$timeRunningHTTP[1],
                                       'tasks'       =>$httpTasks[0][0],
                                       'maxTasks'    =>$httpTasks[0][1]];
        $data['DB']                 = ['status'      =>$data['DB'], 
                                       'timeRunning' =>$timeRunningDB[1],
                                       'tasks'       =>$dbTasks[0][0],
                                       'maxTasks'    =>$dbTasks[0][1]];
        $data['CPU']                = $cpuInfo[1][3];
        $data['DISK']               = $diskInfo[1][5][4];
        $data['DEVICES']            = $countDevices;
        $data['TopChannel']         = ['nombreCanal'=>$topChannel->nombreCanal, 'timeView'=>$topChannel->timeView];
        $data['TopLocation']        = ['location'=>$topLocation->location, 'timeView'=>$topLocation->timeView];
        $data['TopSchedule']        = $topSchedule->inicio;

       return response()->json([$data], 200);
    }
}
