<?php 
// ============================================================================
// include vs require
// ============================================================================
// - include: 
//   * Lanza WARNING si el archivo no existe.
//   * El script continúa ejecutándose.
//   * Útil para archivos opcionales (ej: pie de página, banners, secciones secundarias).
//
// - require: 
//   * Lanza FATAL ERROR si el archivo no existe.
//   * El script se detiene por completo.
//   * Útil para archivos esenciales (ej: configuración, funciones base, conexión DB).
// ============================================================================


// -------------------------
// Ejemplo con include
// -------------------------

// Si header.php no se encuentra, mostrará un warning pero el script seguirá funcionando.
include 'inc/header.php'; 
?>

<h1>Home (usando include)</h1>

<?php 
// Si footer.php no se encuentra, también lanzará warning pero continuará.
include 'inc/footer.php'; 
?>

<hr>

<?php 
// -------------------------
// Ejemplo con require
// -------------------------

// Si config.php no existe, el script lanzará un FATAL ERROR y no continuará.
// Lo usamos aquí porque un archivo de configuración sería crítico.
require 'inc/config.php'; 
?>

