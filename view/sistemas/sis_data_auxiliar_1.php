<?php
$icon = "icon-segmento-supermercado-01.svg";
$bg_top_pagina = 'bg-gradient-success ';
$bg_img_pagina = '../img/banner/inner/slider-supermercado.jpg';
$url = 'txt/supermercados/';
$color_btn = 'btn-success';
$color_square_icon = 'bg-success';
$txt_color = 'text-success';

$titulo_pagina = 'Supermercados';
$copy_pagina = file_get_contents($url . 'copy.txt', FILE_USE_INCLUDE_PATH);
$subtitulo = file_get_contents($url . 'subtitulo.txt', FILE_USE_INCLUDE_PATH);
// resenha
$titulo_resenha = file_get_contents($url . 'tituloResenha.txt', FILE_USE_INCLUDE_PATH);
$texto_resenha = file_get_contents($url . 'textoResenha.txt', FILE_USE_INCLUDE_PATH);
// icones e resenha
$icon_1_resenha = 'fas fa-star';
$titulo_1_resenha = 'Melhore o atendimento';
$texto_1_resenha = file_get_contents($url . 'texto_1_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_2_resenha = 'fas fa-box';
$titulo_2_resenha = 'Reduza prejuízos no estoque';
$texto_2_resenha = file_get_contents($url . 'texto_2_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_3_resenha = 'fas fa-chart-line';
$titulo_3_resenha = 'Acompanhe os resultados';
$texto_3_resenha = file_get_contents($url . 'texto_3_resenha.txt', FILE_USE_INCLUDE_PATH);
