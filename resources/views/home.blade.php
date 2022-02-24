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
        <button id ="reboot_Device"  name= {{ $device->mac_address }} class="px-2 py-1 font-bold text-white bg-blue-500 border border-blue-500 rounded hover:bg-blue-700">Reiniciar</button>
        <button id ="logread_Device" name= {{ $device->mac_address }} class="px-2 py-1 font-bold text-white bg-red-500 border border-red-500 rounded hover:bg-red-700">Comandos</button>
      </td>
    </tr>	
    @endforeach
  </tbody>
</table>
{{ $devices->links() }}
<div class="fixed inset-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto outline-none focus:outline-none" id="modal-id">
  <div class="relative w-auto max-w-3xl mx-auto my-6">
    <!--content-->
    <div class="relative flex flex-col w-full bg-white border-0 rounded-lg shadow-lg outline-none focus:outline-none">
      <!--header-->
      <div class="flex items-start justify-between p-5 border-b border-solid rounded-t border-blueGray-200">
        <h3 class="text-3xl font-semibold">
          Inserta tu comando
        </h3>
        {{-- <button class="float-right p-1 ml-auto text-3xl font-semibold leading-none text-black bg-transparent border-0 outline-none opacity-5 focus:outline-none" onclick="toggleModal('modal-id')">
          <span class="block w-6 h-6 text-2xl text-black bg-transparent outline-none opacity-5 focus:outline-none">
            ×
          </span>
        </button> --}}
      </div>
      <!--body-->
      <div class="relative flex-auto p-6 border-b border-solid border-blueGray-200">
        <input id="commandLine" class="flex items-center w-full h-10 pl-16 text-sm font-normal text-gray-600 border border-gray-300 rounded focus:outline-none focus:border focus:border-indigo-700" placeholder="Example: logread"/>
      </div>
      <div class="relative flex-auto p-6">
        <p id="commandResponse" class="my-4 text-lg leading-relaxed text-blueGray-500"></p>
      </div>
      <!--footer-->
      <div class="flex items-center justify-end p-6 border-t border-solid rounded-b border-blueGray-200">
        <button class="px-6 py-2 mb-1 mr-1 text-sm font-bold text-red-500 uppercase transition-all duration-150 ease-linear outline-none background-transparent focus:outline-none" type="button" onclick="toggleModal('modal-id')">
          Cerrar
        </button>
        <button class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none bg-emerald-500 active:bg-emerald-600 hover:shadow-lg focus:outline-none" type="button" onclick="toggleModal('modal-id')">
          Captura
        </button>
      </div>
    </div>
  </div>
</div>
<div class="fixed inset-0 z-40 hidden bg-black opacity-25" id="modal-id-backdrop"></div>
<script src="{{asset('js/Devices.js')}}"></script>
@endsection
