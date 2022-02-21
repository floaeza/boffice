<?php

namespace App\Http\Controllers;
use App\Models\Device;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class DeviceController extends Controller
{
    //
    public function rebootDevice(Request $request){
        $path = public_path();
        $path = $path.'\\python\\amino.py';
        $device = Device::where('mac_address', $request->mac)->first();
        $process = new Process(['python', $path, $device->ip_direction]);
        $process->run();
        // error handling
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        $output_data = $process->getOutput();
        return response()->json([$output_data], 200);
    }
}
