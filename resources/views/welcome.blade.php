@extends('layouts.app')
@section('content')
<div class="flex flex-col flex-auto flex-shrink-0 min-h-screen antialiased text-white bg-gray-700">
	<!-- Sidebar -->
	<div class="fixed left-0 z-10 flex flex-col h-full transition-all duration-300 bg-gray-800 border-none top-14 w-14 hover:w-64 md:w-64 sidebar">
		<div class="flex flex-col justify-between flex-grow overflow-x-hidden overflow-y-auto">
			<ul class="flex flex-col py-4 space-y-1">
			<li class="hidden px-5 md:block">
				<div class="flex flex-row items-center h-8">
				<div class="text-sm font-light tracking-wide text-gray-400 uppercase">Dispositivos</div>
				</div>
			</li>
			<li>
				<a href="#" class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-600 -600 hover:-800 hover:border-gray-800">
				<span class="inline-flex items-center justify-center ml-4">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
				</span>
				<span class="ml-2 text-sm tracking-wide truncate">Residencias</span>
				</a>
			</li>
			<li>
				<a href="#" class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-600 -600 hover:-800 hover:border-gray-800">
				<span class="inline-flex items-center justify-center ml-4">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.237,3.056H2.93c-0.694,0-1.263,0.568-1.263,1.263v8.837c0,0.694,0.568,1.263,1.263,1.263h4.629v0.879c-0.015,0.086-0.183,0.306-0.273,0.423c-0.223,0.293-0.455,0.592-0.293,0.92c0.07,0.139,0.226,0.303,0.577,0.303h4.819c0.208,0,0.696,0,0.862-0.379c0.162-0.37-0.124-0.682-0.374-0.955c-0.089-0.097-0.231-0.252-0.268-0.328v-0.862h4.629c0.694,0,1.263-0.568,1.263-1.263V4.319C18.5,3.625,17.932,3.056,17.237,3.056 M8.053,16.102C8.232,15.862,8.4,15.597,8.4,15.309v-0.89h3.366v0.89c0,0.303,0.211,0.562,0.419,0.793H8.053z M17.658,13.156c0,0.228-0.193,0.421-0.421,0.421H2.93c-0.228,0-0.421-0.193-0.421-0.421v-1.263h15.149V13.156z M17.658,11.052H2.509V4.319c0-0.228,0.193-0.421,0.421-0.421h14.308c0.228,0,0.421,0.193,0.421,0.421V11.052z"></path></svg>
				</span>
				<span class="ml-2 text-sm tracking-wide truncate">Dispositivos</span>
				</a>
			</li>
			<li>
				<a href="#" class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-600 -600 hover:-800 hover:border-gray-800">
				<span class="inline-flex items-center justify-center ml-4">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
				</span>
				<span class="ml-2 text-sm tracking-wide truncate">Reportes</span>
				</a>
			</li>
			<li>
				<a href="#" class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-600 -600 hover:-800 hover:border-gray-800">
				<span class="inline-flex items-center justify-center ml-4">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
					</svg>
				</span>
				<span class="ml-2 text-sm tracking-wide truncate">Servidor y servicios</span>
				</a>
			</li>
			<li class="hidden px-5 md:block">
				<div class="flex flex-row items-center h-8 mt-5">
				<div class="text-sm font-light tracking-wide text-gray-400 uppercase">Televisión</div>
				</div>
			</li>
			<li>
				<a href="#" class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-600 -600 hover:-800 hover:border-gray-800">
				<span class="inline-flex items-center justify-center ml-4">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="0.7" d="M16.803,18.615h-4.535c-1,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.535C18.616,17.803,17.804,18.615,16.803,18.615zM17.71,12.268c0-0.502-0.405-0.906-0.907-0.906h-4.535c-0.501,0-0.906,0.404-0.906,0.906v4.535c0,0.502,0.405,0.906,0.906,0.906h4.535c0.502,0,0.907-0.404,0.907-0.906V12.268z M16.803,9.546h-4.535c-1,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.534C18.616,8.734,17.804,9.546,16.803,9.546zM17.71,3.198c0-0.501-0.405-0.907-0.907-0.907h-4.535c-0.501,0-0.906,0.406-0.906,0.907v4.534c0,0.501,0.405,0.908,0.906,0.908h4.535c0.502,0,0.907-0.406,0.907-0.908V3.198z M7.733,18.615H3.198c-1.002,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,1.814,1.814v4.535C9.547,17.803,8.735,18.615,7.733,18.615zM8.64,12.268c0-0.502-0.406-0.906-0.907-0.906H3.198c-0.501,0-0.907,0.404-0.907,0.906v4.535c0,0.502,0.406,0.906,0.907,0.906h4.535c0.501,0,0.907-0.404,0.907-0.906V12.268z M7.733,9.546H3.198c-1.002,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,1.814,1.814v4.534C9.547,8.734,8.735,9.546,7.733,9.546z M8.64,3.198c0-0.501-0.406-0.907-0.907-0.907H3.198c-0.501,0-0.907,0.406-0.907,0.907v4.534c0,0.501,0.406,0.908,0.907,0.908h4.535c0.501,0,0.907-0.406,0.907-0.908V3.198z"></path>
					</svg>
				</span>
				<span class="ml-2 text-sm tracking-wide truncate">Guias de programación</span>
				</a>
			</li>
			<li>
				<a href="#" class="relative flex flex-row items-center pr-6 border-l-4 border-transparent h-11 focus:outline-none hover:bg-gray-600 -600 hover:-800 hover:border-gray-800">
				<span class="inline-flex items-center justify-center ml-4">
					<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17.125,1.375H2.875c-0.828,0-1.5,0.672-1.5,1.5v11.25c0,0.828,0.672,1.5,1.5,1.5H7.75v2.25H6.625c-0.207,0-0.375,0.168-0.375,0.375s0.168,0.375,0.375,0.375h6.75c0.207,0,0.375-0.168,0.375-0.375s-0.168-0.375-0.375-0.375H12.25v-2.25h4.875c0.828,0,1.5-0.672,1.5-1.5V2.875C18.625,2.047,17.953,1.375,17.125,1.375z M11.5,17.875h-3v-2.25h3V17.875zM17.875,14.125c0,0.414-0.336,0.75-0.75,0.75H2.875c-0.414,0-0.75-0.336-0.75-0.75v-1.5h15.75V14.125z M17.875,11.875H2.125v-9c0-0.414,0.336-0.75,0.75-0.75h14.25c0.414,0,0.75,0.336,0.75,0.75V11.875z M10,14.125c0.207,0,0.375-0.168,0.375-0.375S10.207,13.375,10,13.375s-0.375,0.168-0.375,0.375S9.793,14.125,10,14.125z"></path>
					</svg>
				</span>
				<span class="ml-2 text-sm tracking-wide truncate">Paquetes de canales</span>
				</a>
			</li>
			</ul>
			<p class="hidden px-5 py-3 text-xs text-center mb-14 md:block">Powered by BBINCO</p>
		</div>
	</div>
	<!-- ./Sidebar -->

	<!-- Content -->
	<div class="h-full mb-10 ml-14 mt-14 md:ml-64">
		<!-- Statics Cards -->
		<div class="grid grid-cols-1 gap-4 p-4 sm:grid-cols-2 lg:grid-cols-4">
			<div class="flex items-center justify-between p-3 font-medium text-white bg-gray-800 border-b-4 border-gray-600 rounded-md shadow-lg group">
				<div class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
					<svg width="30" height="30" fill="none" viewBox="0 0 20 20" stroke="currentColor" class="text-gray-800 transition-transform duration-500 ease-in-out transform stroke-current">
						<path d="M17.237,3.056H2.93c-0.694,0-1.263,0.568-1.263,1.263v8.837c0,0.694,0.568,1.263,1.263,
						1.263h4.629v0.879c-0.015,0.086-0.183,0.306-0.273,0.423c-0.223,0.293-0.455,0.592-0.293,0.92c0.07,
						0.139,0.226,0.303,0.577,0.303h4.819c0.208,0,0.696,0,
						0.862-0.379c0.162-0.37-0.124-0.682-0.374-0.955c-0.089-0.097-0.231-0.252-0.268-0.328v-0.862h4.629c0.694,
						0,1.263-0.568,1.263-1.263V4.319C18.5,3.625,17.932,3.056,17.237,3.056 M8.053,16.102C8.232,
						15.862,8.4,15.597,8.4,15.309v-0.89h3.366v0.89c0,0.303,0.211,0.562,0.419,0.793H8.053z M17.658,13.156c0,
						0.228-0.193,0.421-0.421,0.421H2.93c-0.228,0-0.421-0.193-0.421-0.421v-1.263h15.149V13.156z M17.658,
						11.052H2.509V4.319c0-0.228,0.193-0.421,0.421-0.421h14.308c0.228,0,0.421,0.193,0.421,0.421V11.052z"></path>
					</svg>
				</div>
				<div class="text-right">
					<p class="text-2xl">{{ $countDevices }}</p>
					<p>Dispositivos</p>
				</div>
			</div>
			<div class="flex items-center justify-between p-3 font-medium text-white bg-gray-800 border-b-4 border-gray-600 rounded-md shadow-lg group">
				<div class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
					<svg width="30" height="30" fill="none" viewBox="0 0 20 20" stroke="currentColor" class="text-gray-800 transition-transform duration-500 ease-in-out transform stroke-current">
						<path d="M15.684,16.959L10.879,8.52c0.886-0.343,1.517-1.193,1.517-2.186c0-1.296-1.076-2.323-2.396-2.323S7.604,
						5.037,7.604,6.333c0,0.993,0.63,1.843,1.517,2.186l-4.818,8.439c-0.189,0.311,0.038,0.708,0.412,0.708h10.558C15.645,
						17.667,15.871,17.27,15.684,16.959 M8.562,6.333c0-0.778,0.645-1.382,1.438-1.382s1.438,0.604,1.438,1.382c0,
						0.779-0.645,1.412-1.438,1.412S8.562,7.113,8.562,6.333 M5.55,16.726L10,8.91l4.435,7.815H5.55z M15.285,
						9.62c1.26-2.046,1.26-4.525,0-6.572c-0.138-0.223-0.064-0.512,0.162-0.646c0.227-0.134,0.521-0.063,0.658,
						0.16c1.443,2.346,1.443,5.2,0,7.546c-0.236,0.382-0.641,0.17-0.658,0.159C15.221,10.131,15.147,9.842,15.285,
						9.62 M13.395,8.008c0.475-1.063,0.475-2.286,0-3.349c-0.106-0.238,0.004-0.515,0.246-0.62c0.242-0.104,0.525,
						0.004,0.632,0.242c0.583,1.305,0.583,2.801,0,4.106c-0.214,0.479-0.747,0.192-0.632,0.242C13.398,8.523,13.288,
						8.247,13.395,8.008 M3.895,10.107c-1.444-2.346-1.444-5.2,0-7.546c0.137-0.223,0.431-0.294,0.658-0.16c0.226,0.135,
						0.299,0.424,0.162,0.646c-1.26,2.047-1.26,4.525,0,6.572c0.137,0.223,0.064,0.512-0.162,0.646C4.535,10.277,4.131,
						10.489,3.895,10.107 M5.728,8.387c-0.583-1.305-0.583-2.801,0-4.106c0.106-0.238,0.39-0.346,0.631-0.242c0.242,0.105,
						0.353,0.382,0.247,0.62c-0.475,1.063-0.475,2.286,0,3.349c0.106,0.238-0.004,0.515-0.247,0.62c-0.062,0.027-0.128,
						0.04-0.192,0.04C5.982,8.668,5.807,8.563,5.728,8.387">
						</path>
					</svg>
				</div>
				<div class="text-right">
					<p class="text-2xl">{{ $topLocation->location }}</p>
					<p>Residencia mas activa</p>
				</div>
			</div>
			<div class="flex items-center justify-between p-3 font-medium text-white bg-gray-800 border-b-4 border-gray-600 rounded-md shadow-lg group">
				<div class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
					<svg width="30" height="30" fill="none" viewBox="0 0 20 20" stroke="currentColor" class="text-gray-800 transition-transform duration-500 ease-in-out transform stroke-current">
						<path d="M10,6.978c-1.666,0-3.022,1.356-3.022,3.022S8.334,13.022,10,13.022s3.022-1.356,3.022-3.022S11.666,
						6.978,10,6.978M10,12.267c-1.25,0-2.267-1.017-2.267-2.267c0-1.25,1.016-2.267,2.267-2.267c1.251,0,2.267,1.016,
						2.267,2.267C12.267,11.25,11.251,12.267,10,12.267 M18.391,9.733l-1.624-1.639C14.966,6.279,12.563,5.278,10,
						5.278S5.034,6.279,3.234,8.094L1.609,9.733c-0.146,0.147-0.146,0.386,0,0.533l1.625,1.639c1.8,1.815,4.203,
						2.816,6.766,2.816s4.966-1.001,6.767-2.816l1.624-1.639C18.536,10.119,18.536,9.881,18.391,9.733 M16.229,
						11.373c-1.656,1.672-3.868,2.594-6.229,2.594s-4.573-0.922-6.23-2.594L2.41,10l1.36-1.374C5.427,6.955,
						7.639,6.033,10,6.033s4.573,0.922,6.229,2.593L17.59,10L16.229,11.373z">
						</path>
					</svg>
				</div>
				<div class="text-right">
					<p class="text-2xl">{{ $topChannel->nombreCanal }}</p>
					<p>Canal mas visto</p>
				</div>
			</div>
			<div class="flex items-center justify-between p-3 font-medium text-white bg-gray-800 border-b-4 border-gray-600 rounded-md shadow-lg group">
				<div class="flex items-center justify-center transition-all duration-300 transform bg-white rounded-full w-14 h-14 group-hover:rotate-12">
					<svg width="30" height="30" fill="none" viewBox="0 0 20 20" stroke="currentColor" class="text-gray-800 transition-transform duration-500 ease-in-out transform stroke-current">
						<path d="M10.25,2.375c-4.212,0-7.625,3.413-7.625,7.625s3.413,7.625,7.625,7.625s7.625-3.413,7.625-7.625S14.462,
						2.375,10.25,2.375M10.651,16.811v-0.403c0-0.221-0.181-0.401-0.401-0.401s-0.401,0.181-0.401,
						0.401v0.403c-3.443-0.201-6.208-2.966-6.409-6.409h0.404c0.22,0,0.401-0.181,0.401-0.401S4.063,9.599,3.843,
						9.599H3.439C3.64,6.155,6.405,3.391,9.849,3.19v0.403c0,0.22,0.181,0.401,0.401,0.401s0.401-0.181,
						0.401-0.401V3.19c3.443,0.201,6.208,2.965,6.409,6.409h-0.404c-0.22,0-0.4,0.181-0.4,0.401s0.181,0.401,0.4,
						0.401h0.404C16.859,13.845,14.095,16.609,10.651,16.811 M12.662,12.412c-0.156,0.156-0.409,0.159-0.568,
						0l-2.127-2.129C9.986,10.302,9.849,10.192,9.849,10V5.184c0-0.221,0.181-0.401,0.401-0.401s0.401,0.181,0.401,
						0.401v4.651l2.011,2.008C12.818,12.001,12.818,12.256,12.662,12.412"></path>
					</svg>
				</div>
				<div class="text-right">
					<p class="text-2xl">{{ $topSchedule->inicio }}</p>
					<p>Horario de mayor uso</p>
				</div>
			</div>
		</div>
		<!-- ./Statics Cards -->
		
		<!-- Server Cards -->
		<div class="grid grid-cols-1 gap-4 p-4 lg:grid-cols-2">
			<div class="relative flex flex-col w-full min-w-0 mb-4 break-words bg-gray-800 rounded shadow-lg lg:mb-0">
				<div class="px-0 mb-0 border-0 rounded-t">
					<div class="flex flex-wrap items-center px-4 py-2">
						<div class="relative flex-1 flex-grow w-full max-w-full">
							<h3 class="text-base font-semibold text-gray-50">Estado del servidor</h3>
						</div>
						<div class="relative flex-1 flex-grow w-full max-w-full text-right">
							<button class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-gray-800 uppercase transition-all duration-150 ease-linear bg-gray-100 rounded outline-none active:text-gray-700 focus:outline-none" type="button">Mostrar todo</button>
						</div>
					</div>
					<div class="block w-full overflow-x-auto">
						<table class="items-center w-full bg-transparent border-collapse">
							<thead>
								<tr>
									<th class="px-4 py-3 text-xs font-semibold text-left text-gray-100 uppercase align-middle bg-gray-600 border border-l-0 border-r-0 border-gray-500 border-solid whitespace-nowrap">Servicio</th>
									<th class="px-4 py-3 text-xs font-semibold text-left text-gray-100 uppercase align-middle bg-gray-600 border border-l-0 border-r-0 border-gray-500 border-solid whitespace-nowrap">Uso</th>
									<th class="px-4 py-3 text-xs font-semibold text-left text-gray-100 uppercase align-middle bg-gray-600 border border-l-0 border-r-0 border-gray-500 border-solid whitespace-nowrap min-w-140-px"></th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-gray-100 ">
									<th class="p-4 px-4 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">CPU</th>
									<td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">257</td>
									<td class="p-4 px-4 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
										<div class="flex items-center">
											<span class="mr-2">35%</span>
											<div class="relative w-full">
												<div class="flex h-2 overflow-hidden text-xs bg-green-200 rounded">
													<div style="width: 35%" class="flex flex-col justify-center text-center text-white bg-green-500 shadow-none whitespace-nowrap"></div>
												</div>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			<div class="relative flex flex-col w-full min-w-0 break-words bg-gray-800 rounded shadow-lg">
				<div class="px-0 mb-0 border-0 rounded-t">
					<div class="flex flex-wrap items-center px-4 py-2">
						<div class="relative flex-1 flex-grow w-full max-w-full">
						<h3 class="text-base font-semibold text-gray-50">Actividades recientes</h3>
						</div>
						<div class="relative flex-1 flex-grow w-full max-w-full text-right">
						<button class="px-3 py-1 mb-1 mr-1 text-xs font-bold text-gray-800 uppercase transition-all duration-150 ease-linear bg-gray-100 rounded outline-none active:text-gray-700 focus:outline-none" type="button">Mostrar todo</button>
						</div>
					</div>
					<div class="block w-full">
						<div class="px-4 py-3 text-xs font-semibold text-left text-gray-100 uppercase align-middle bg-gray-600 border border-l-0 border-r-0 border-gray-500 border-solid whitespace-nowrap">
							Hoy
						</div>
						<ul class="my-1">
							<li class="flex px-4">
								<div class="flex items-center justify-center w-10 h-10 mr-10 transition-all duration-300 transform bg-blue-600 rounded-full">
									<svg width="40" height="30" fill="none" viewBox="0 0 20 20" stroke="currentColor" class="text-white transition-transform duration-500 ease-in-out transform stroke-current">
										<path fill="none" d="M16.803,18.615h-4.535c-1,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,
										0.814-1.814,1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.535C18.616,17.803,17.804,
										18.615,16.803,18.615zM17.71,12.268c0-0.502-0.405-0.906-0.907-0.906h-4.535c-0.501,0-0.906,
										0.404-0.906,0.906v4.535c0,0.502,0.405,0.906,0.906,0.906h4.535c0.502,0,0.907-0.404,
										0.907-0.906V12.268z M16.803,9.546h-4.535c-1,0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.814-1.814,
										1.814-1.814h4.535c1.001,0,1.813,0.812,1.813,1.814v4.534C18.616,8.734,17.804,9.546,16.803,
										9.546zM17.71,3.198c0-0.501-0.405-0.907-0.907-0.907h-4.535c-0.501,0-0.906,0.406-0.906,
										0.907v4.534c0,0.501,0.405,0.908,0.906,0.908h4.535c0.502,0,0.907-0.406,0.907-0.908V3.198z M7.733,
										18.615H3.198c-1.002,0-1.814-0.812-1.814-1.812v-4.535c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,
										0,1.814,0.812,1.814,1.814v4.535C9.547,17.803,8.735,18.615,7.733,18.615zM8.64,
										12.268c0-0.502-0.406-0.906-0.907-0.906H3.198c-0.501,0-0.907,0.404-0.907,0.906v4.535c0,0.502,
										0.406,0.906,0.907,0.906h4.535c0.501,0,0.907-0.404,0.907-0.906V12.268z M7.733,9.546H3.198c-1.002,
										0-1.814-0.812-1.814-1.814V3.198c0-1.002,0.812-1.814,1.814-1.814h4.535c1.002,0,1.814,0.812,
										1.814,1.814v4.534C9.547,8.734,8.735,9.546,7.733,9.546z M8.64,3.198c0-0.501-0.406-0.907-0.907-0.907H3.198c-0.501,
										0-0.907,0.406-0.907,0.907v4.534c0,0.501,0.406,0.908,0.907,0.908h4.535c0.501,0,0.907-0.406,
										0.907-0.908V3.198z">
										</path>
									</svg>
								</div>		
								<div class="flex items-center flex-grow py-2 text-sm text-gray-100 border-gray-400">
									<div class="flex items-center justify-between flex-grow">
									<div class="self-center">
										<a class="mr-10 font-medium text-gray-50 hover:text-gray-100" href="#0" style="outline: none;">
											Guias de programación
										</a> 
										<span class="px-2 py-1 font-semibold leading-tight text-green-100 bg-green-700 rounded-full"> Guias creadas </span>
									</div>
									<div class="flex-shrink-0 ml-2">
										<a class="flex items-center font-medium text-blue-400 hover:text-blue-500" href="#0" style="outline: none;">
										View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transition-transform duration-500 ease-in-out transform"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
										</a>
									</div>
									</div>
								</div>	
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- ./Server Cards -->
		
	</div>
	<!-- ./Content -->
</div>

@endsection  