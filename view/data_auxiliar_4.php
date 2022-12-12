<?php
$icon = "icon-segmento-loja-01.svg";
$bg_top_pagina = 'bg-gradient-purple';
$bg_img_pagina = '../img/banner/inner/slider-loja.jpg';
$url = 'txt/lojas/';
$color_btn = 'btn-purple';
$color_square_icon = 'bg-purple';
$txt_color = 'text-purple';

$titulo_pagina = 'Lojas';
$copy_pagina = file_get_contents($url . 'copy.txt', FILE_USE_INCLUDE_PATH);
$subtitulo = file_get_contents($url . 'subtitulo.txt', FILE_USE_INCLUDE_PATH);
// resenha
$titulo_resenha = file_get_contents($url . 'tituloResenha.txt', FILE_USE_INCLUDE_PATH);
$texto_resenha = file_get_contents($url . 'textoResenha.txt', FILE_USE_INCLUDE_PATH);
// icones e resenha
$icon_1_resenha = 'fas fa-star';
$titulo_1_resenha = 'Agilidade e satisfação no atendimento';
$texto_1_resenha = file_get_contents($url . 'texto_1_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_2_resenha = 'fas fa-box';
$titulo_2_resenha = 'Reduza os prejuízos no estoque da loja';
$texto_2_resenha = file_get_contents($url . 'texto_2_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_3_resenha = 'fas fa-chart-line';
$titulo_3_resenha = 'Gerencie com clareza e facilidade';
$texto_3_resenha = file_get_contents($url . 'texto_3_resenha.txt', FILE_USE_INCLUDE_PATH);
