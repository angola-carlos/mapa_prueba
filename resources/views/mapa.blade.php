@extends('layouts.app')

@section('title', 'Mapa')

@section('content')


<div id="map" style="height: 550px; width: 100%;"></div>

<!-- Leaflet CSS y JS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

@php
    $plano = session('plano'); // ruta del plano subido
echo $plano;
@endphp

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Coordenadas de inicio del mapa
    var lat = -17.870738;
    var lng = -63.041641;
    var map = L.map('map').setView([lat, lng], 15);

    // Cargar mapa base
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    // Marcador inicial
    L.marker([lat, lng])
      .addTo(map)
      .bindPopup('Ubicación inicial.<br>¡Urbanización El Quior!')
      .openPopup();

    // Plano superpuesto (si existe)
    
    @if($plano)
        var imageBounds = [[-17.884139965604863, -63.043329056521785], [-17.866384974526262, -63.03885662605242]]; // sur-oeste, norte-este
        L.imageOverlay("{{$plano}}", imageBounds).addTo(map);
    @endif
  });
</script>

@endsection
