@extends('layouts.app')

@section('content')
<!-- component -->
<table class="block min-w-full border-collapse md:table">
  <thead class="block md:table-header-group">
    <tr class="absolute block border border-grey-500 md:border-none md:table-row -top-full md:top-auto -left-full md:left-auto md:relative ">
      <th class="block p-2 font-bold text-left text-white bg-gray-600 md:border md:border-grey-500 md:table-cell">Marca Dispositivo</th>
      <th class="block p-2 font-bold text-left text-white bg-gray-600 md:border md:border-grey-500 md:table-cell">Mac Address</th>
      <th class="block p-2 font-bold text-left text-white bg-gray-600 md:border md:border-grey-500 md:table-cell">Direccion IP</th>
      <th class="block p-2 font-bold text-left text-white bg-gray-600 md:border md:border-grey-500 md:table-cell">Modelo</th>
      <th class="block p-2 font-bold text-left text-white bg-gray-600 md:border md:border-grey-500 md:table-cell">Actions</th>
    </tr>
  </thead>
  <tbody class="block md:table-row-group">
    @foreach ($devices as $device)
    <tr class="block bg-gray-300 border border-grey-500 md:border-none md:table-row">
      <td class="block p-2 text-left md:border md:border-grey-500 md:table-cell"><span class="inline-block w-1/3 font-bold md:hidden">Marca Dispositivo</span>{{ $device->make }}</td>
      <td class="block p-2 text-left md:border md:border-grey-500 md:table-cell"><span class="inline-block w-1/3 font-bold md:hidden">Mac Address</span>{{ $device->mac_address }}</td>
      <td class="block p-2 text-left md:border md:border-grey-500 md:table-cell"><span class="inline-block w-1/3 font-bold md:hidden">Direccion IP</span>{{ $device->ip_direction }}</td>
      <td class="block p-2 text-left md:border md:border-grey-500 md:table-cell"><span class="inline-block w-1/3 font-bold md:hidden">Modelo</span>{{ $device->model }}</td>
      <td class="block p-2 text-left md:border md:border-grey-500 md:table-cell">
        <span class="inline-block w-1/3 font-bold md:hidden">Actions</span>
        <button id ="reboot_Device"  name= {{ $device->mac_address }} class="px-2 py-1 font-bold text-white bg-blue-500 border border-blue-500 rounded hover:bg-blue-700">Edit</button>
        <button id ="logread_Device" name= {{ $device->mac_address }} class="px-2 py-1 font-bold text-white bg-red-500 border border-red-500 rounded hover:bg-red-700">Delete</button>
      </td>
    </tr>	
    @endforeach
  </tbody>
</table>
{{ $devices->links() }}
@endsection
