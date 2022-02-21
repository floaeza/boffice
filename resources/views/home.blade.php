@extends('layouts.app')

@section('content')
<!-- component -->
<div class="w-2/3 mx-auto">
    <div class="my-6 bg-white rounded shadow-md">
      <table class="w-full text-left border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
        <thead>
          <tr>
            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">Mac Adress</th>
            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">Direccion IP</th>
            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">Marca</th>
            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">Modelo</th>
            <th class="px-6 py-4 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-dark border-grey-light">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($devices as $device)
          <tr class="hover:bg-blue-200">
            <td class="px-6 py-4 border-b border-grey-light">{{ $device->mac_address }}</td>
            <td class="px-6 py-4 border-b border-grey-light">{{ $device->ip_direction }}</td>
            <td class="px-6 py-4 border-b border-grey-light">{{ $device->make }}</td>
            <td class="px-6 py-4 border-b border-grey-light">{{ $device->model }}</td>
            <td class="px-6 py-4 border-b border-grey-light">
              <a id="reboot_Device"  name={{ $device->mac_address }} class="px-3 py-1 text-xs font-bold bg-green-400 rounded cursor-pointer text-grey-lighter hover:bg-green-700">Reiniciar</a>
              <a id="logread_Device" name ={{ $device->mac_address }} class="px-3 py-1 text-xs font-bold bg-red-500 rounded cursor-pointer text-grey-lighter hover:bg-red-700">Logread</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $devices->links() }}
    </div>
  </div>
<script src="{{asset('js/Devices.js')}}"></script>
@endsection
