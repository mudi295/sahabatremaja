@extends('layouts.app')

@section('content')

<section class="pt-32 pb-20 bg-[#FAFAF7] min-h-screen">

    <div class="max-w-7xl mx-auto px-6">

        <div class="text-center mb-12">

            <span class="inline-flex px-4 py-2 rounded-full bg-red-100 text-red-600 text-xs font-bold uppercase">

                🚨 Evacuation Route System

            </span>

            <h1 class="text-5xl font-black mt-5">

                Jalur Evakuasi Bencana

            </h1>

            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">

                Informasi jalur evakuasi menuju titik aman saat terjadi bencana.

            </p>

        </div>

        <div class="grid lg:grid-cols-12 gap-8">

            {{-- MAP --}}
            <div class="lg:col-span-8">

                <div
                    id="map"
                    class="h-[700px] rounded-3xl overflow-hidden shadow-xl border border-gray-200">
                </div>

            </div>

            {{-- SIDEBAR --}}
            <div class="lg:col-span-4">

                <div class="bg-white rounded-3xl shadow-xl p-6">

                    <h3 class="font-black text-xl mb-6">

                        Daftar Jalur

                    </h3>

                    <div class="space-y-4 max-h-[620px] overflow-y-auto">

                        @foreach($routes as $route)

                        <a
                            href="{{ route('evacuation.show',$route->id) }}"
                            class="block border border-gray-100 rounded-2xl p-4 hover:border-[#2E7D32] hover:bg-green-50 transition">

                            <div class="flex justify-between items-center">

                                <h4 class="font-bold">

                                    {{ $route->title }}

                                </h4>

                                <span class="text-xs bg-red-100 text-red-600 px-2 py-1 rounded-full">

                                    {{ ucfirst($route->disaster_type) }}

                                </span>

                            </div>

                            <p class="text-sm text-gray-500 mt-2">

                                {{ $route->start_location }}

                                →

                                {{ $route->safe_location }}

                            </p>

                            <p class="text-xs text-green-600 mt-2">

                                ⏱ {{ $route->estimated_time }} menit

                            </p>

                        </a>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<link rel="stylesheet"
      href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function () {

    let map = L.map('map').setView(
        [-6.92,106.92],
        10
    );

    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            attribution:'© OpenStreetMap'
        }
    ).addTo(map);

    @foreach($routes as $route)

        let startMarker = L.marker([
            {{ $route->start_lat }},
            {{ $route->start_lng }}
        ]).addTo(map);

        startMarker.bindPopup(`
            <b>{{ $route->title }}</b>
            <br>
            {{ $route->start_location }}
        `);

        let safeMarker = L.marker([
            {{ $route->safe_lat }},
            {{ $route->safe_lng }}
        ]).addTo(map);

        safeMarker.bindPopup(`
            <b>{{ $route->safe_location }}</b>
        `);

        L.polyline([
            [
                {{ $route->start_lat }},
                {{ $route->start_lng }}
            ],
            [
                {{ $route->safe_lat }},
                {{ $route->safe_lng }}
            ]
        ],{
            color:'red',
            weight:5
        }).addTo(map);

    @endforeach

});

</script>

@endsection