<?php
/**
 * Template Name: Popup
 * Template Post Type: page
 * 
 * @package WordPress
 * @subpackage venture
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="grid">
    <div class="grid-item" onclick="mostrarPopup(0)">
      1
    </div>
    <div class="grid-item" onclick="mostrarPopup(1)">
      2
    </div>
    <div class="grid-item" onclick="mostrarPopup(2)">
      3
    </div>
  </div>
  
  <div id="popup" class="popup" style="display: none;">
    <!-- Contenido del popup se agregará dinámicamente con JavaScript -->
  </div>
  <style>
    .grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 10px;
}

.grid-item {
  background-color: #ccc;
  padding: 10px;
  text-align: center;
  cursor: pointer;
}

.popup {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
}

.grid-item-sub {
  background-color: #f0f0f0;
  padding: 5px;
  margin: 5px;
}

  </style>

  <script>
    const proyectos = [[1, [1, 1]], [2, [2, 2]], [3, [3, 3]]];
    const popup = document.getElementById('popup');

    function mostrarPopup(index) {
      const proyectoSeleccionado = proyectos[index][1];

      // Limpiar el contenido anterior del popup
      popup.innerHTML = '';

      // Crear elementos grid-item-sub y agregarlos al popup
      proyectoSeleccionado.forEach((item) => {
        const gridItemSub = document.createElement('div');
        gridItemSub.className = 'grid-item-sub';
        gridItemSub.textContent = item;
        popup.appendChild(gridItemSub);
      });

      // Mostrar el popup
      popup.style.display = 'block';
    }

    // Cerrar el popup al hacer clic fuera de él
    document.addEventListener('click', function (event) {
      if (event.target.classList.contains('grid-item')) {
        // Si se hace clic en un elemento .grid-item, no cerrar el popup
        return;
      }

      // Cerrar el popup si se hace clic fuera de él
      popup.style.display = 'none';
    });


  </script>
</body>
</html>