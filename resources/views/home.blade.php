@extends('layouts.app')

@section('content')
<script src="{{asset('js/terminal_programs.js')}}"></script>
<script src="{{asset('js/terminal.js')}}"></script>
{{-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> --}}
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
  <!-- component -->
<!-- Code block starts -->
<dh-component>
  <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
  <div class="absolute top-0 bottom-0 left-0 right-0 z-10 py-12 transition duration-150 ease-in-out bg-gray-700" id="modal">
      <div role="alert" class="container w-11/12 max-w-lg mx-auto md:w-2/3">
          <div class="relative px-5 py-8 bg-white border border-gray-400 rounded shadow-md md:px-10">
            <div id="terminal">
              <header>>>>Welcome in terminal, type "help" to get commands</header>
              <div id="terminal_lines">
              </div>
            </div>
      </div>
  </div>
  {{-- <div class="flex justify-center w-full py-12" id="button">
      <button class="px-4 py-2 mx-auto text-xs text-white transition duration-150 ease-in-out bg-indigo-700 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 sm:px-8 sm:text-sm" onclick="modalHandler(true)">Open Modal</button>
  </div> --}}
</dh-component>
<!-- Code block ends -->
<script src="{{asset('js/Devices.js')}}"></script>
@endsection
