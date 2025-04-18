<div class="sidebar">
    <h2>Menú</h2>
    <a href="#">Inicio</a>
    <a href="#">Dashboard</a>
    <a href="/usuarios">Usuarios</a>
    <a href="#">Ajustes</a>
    <div class="submenu">
        <button onclick="toggleSubmenu()" style="background: none; color: white; border: none; padding: 10px 0; text-align: left; width: 100%;">
            Mapa
        </button>
        <div id="map-submenu" style="display: none; margin-left: 10px;">
            <a href="/mapa">Ver mapa general</a>
            <a href="/subir-plano">Cargar Plano</a>
            <a href="#">Sensores</a>
            <a href="#">Zonas</a>
        </div>
    </div>

</div>

<script>
    function toggleSubmenu() {
        var submenu = document.getElementById("map-submenu");
        submenu.style.display = submenu.style.display === "none" ? "block" : "none";
    }
</script>