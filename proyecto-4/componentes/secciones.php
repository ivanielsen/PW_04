<?php
$inicio = [
    'titulo' => 'FAustoNielsenIVanMujciaTrujillo',
    'contenido' => 'Ivan contenido',
    'imagen' => 'http://lorempixel.com/400/200/sports/1',
];
$shop = [
    'titulo' => 'Ivan Shop',
    'contenido' => 'Galletas',
    'imagen' => 'http://lorempixel.com/400/200/sports/2',
];
$contacto = [
    'titulo' => 'Contacto',
    'contenido' => 'Helado',
    'imagen' => 'http://lorempixel.com/400/200/sports/3',
];
$about = [
    'titulo' => 'About',
    'contenido' => 'Yo y mas',
    'imagen' => 'http://lorempixel.com/400/200/sports/4',
];
$secciones = [
    'p1' => $inicio,
    'p2' => $shop,
    'p3' => $contacto,
    'p4' => $about,
];  
if (isset($_GET['seccion'])) {
    $seccion = $_GET['seccion'];
}
if (!isset($_GET['seccion'])) {
    $seccion = 'p1';
}
$titulo = $secciones[$seccion]['titulo'];
$contenido = $secciones[$seccion]['contenido'];
$imagen = $secciones[$seccion]['imagen'];
?>