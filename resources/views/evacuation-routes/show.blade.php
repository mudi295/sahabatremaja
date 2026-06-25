@extends('layouts.app')

@section('content')

<section class="pt-32 pb-24 bg-[#FAFAF7] min-h-screen">

    <div class="max-w-7xl mx-auto px-6">

        <div class="mb-10">

            <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-red-100 text-red-600 text-xs font-bold uppercase tracking-wider">

                🚨 Jalur Evakuasi

            </span>

            <h1 class="text-5xl font-black mt-4 text-gray-900">

                {{ $route->title }}

            </h1>

            <p class="text-gray-500 mt-3">

                {{ ucfirst($route->disaster_type) }}

            </p>

        </div>

        <div class="grid lg:grid-cols-12 gap-8">

            {{-- MAP --}}

            <div class="lg:col-span-8">

                <div
                    id="map"
                    class="h-[650px] rounded-3xl overflow-hidden shadow-xl border border-gray-200">
                </div>

            </div>

            {{-- INFO --}}

            <div class="lg:col-span-4">

                <div class="bg-white rounded-3xl shadow-xl p-8">

                    <h3 class="font-black text-xl mb-6">

                        Informasi Jalur

                    </h3>

                    <div class="space-y-5">

                        <div>

                            <p class="text-xs text-gray-400 uppercase">
                                Jenis Bencana
                            </p>

                            <p class="font-bold">
                                {{ ucfirst($route->disaster_type) }}
                            </p>

                        </div>

                        <div>

                            <p class="text-xs text-gray-400 uppercase">
                                Lokasi Awal
                            </p>

                            <p class="font-bold">
                                {{ $route->start_location }}
                            </p>

                        </div>

                        <div>

                            <p class="text-xs text-gray-400 uppercase">
                                Lokasi Aman
                            </p>

                            <p class="font-bold">
                                {{ $route->safe_location }}
                            </p>

                        </div>

                        <div>

                            <p class="text-xs text-gray-400 uppercase">
                                Estimasi Waktu
                            </p>

                            <p class="font-bold text-green-600">
                                {{ $route->estimated_time }} menit
                            </p>

                        </div>

                        <hr>

                        <div>

                            <p class="text-xs text-gray-400 uppercase mb-2">
                                Petunjuk Evakuasi
                            </p>

                            <p class="text-gray-600 leading-relaxed">
                                {{ $route->description }}
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<link
    rel="stylesheet"
    href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function () {

    let startLat = {{ $route->start_lat }};
    let startLng = {{ $route->start_lng }};

    let safeLat = {{ $route->safe_lat }};
    let safeLng = {{ $route->safe_lng }};

    let map = L.map('map').setView(
        [startLat, startLng],
        12
    );

    L.tileLayer(
        'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
        {
            attribution:'© OpenStreetMap'
        }
    ).addTo(map);

    let startMarker = L.marker([
        startLat,
        startLng
    ]).addTo(map)
    .bindPopup('🚨 Lokasi Bencana');

    let safeMarker = L.marker([
        safeLat,
        safeLng
    ]).addTo(map)
    .bindPopup('✅ Titik Aman');

    let routeLine = L.polyline(
        [
            [startLat,startLng],
            [safeLat,safeLng]
        ],
        {
            color:'red',
            weight:6
        }
    ).addTo(map);

    map.fitBounds(routeLine.getBounds());

});

</script>

@endsection