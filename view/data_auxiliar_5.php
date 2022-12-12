<?php
$icon = "icon-segmento-food-01.svg";
$bg_top_pagina = 'bg-gradient-danger';
$bg_img_pagina = '../img/banner/inner/slider-foodservice.jpg';
$url = 'txt/foodservice/';
$color_btn = 'btn-red';
$color_square_icon = 'bg-red';
$txt_color = 'text-red';
$dot = 'dot-shape-danger.png';
$shape = 'color-shape-danger.svg';
$bg_card='bg-danger';

$titulo_pagina = 'Food Service';
$copy_pagina = file_get_contents($url . 'copy.txt', FILE_USE_INCLUDE_PATH);
$subtitulo = file_get_contents($url . 'subtitulo.txt', FILE_USE_INCLUDE_PATH);
// resenha
$titulo_resenha = file_get_contents($url . 'tituloResenha.txt', FILE_USE_INCLUDE_PATH);
$texto_resenha = file_get_contents($url . 'textoResenha.txt', FILE_USE_INCLUDE_PATH);

// icones e resenha
$icon_1_resenha = 'fas fa-medal';
$titulo_1_resenha = 'Atendimento simples e rápido';
$texto_1_resenha = file_get_contents($url . 'texto_1_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_2_resenha = 'fas fa-wallet';
$titulo_2_resenha = 'Reduza Prejuizos e custos';
$texto_2_resenha = file_get_contents($url . 'texto_2_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_3_resenha = 'fas fa-chart-line';
$titulo_3_resenha = 'Acompanhe os resultados';
$texto_3_resenha = file_get_contents($url . 'texto_3_resenha.txt', FILE_USE_INCLUDE_PATH);

// ******
$img_banner_1_widget = 'food-1.jpg';
$titulo_bloco_1 = 'Crescer sem abrir mão da qualidade';
$icon_bloco_1 = '';
$resenha_bloco_1 = file_get_contents($url.'resenha_bloco_1.txt', FILE_USE_INCLUDE_PATH);

$img_banner_2_widget = 'food-2.jpg';
$titulo_bloco_2 = 'Varejo físico e digital para sua empresa vender mais ';
$icon_bloco_2 = 'text-success fas fa-certificate';
$resenha_bloco_2 = file_get_contents($url.'resenha_bloco_2.txt', FILE_USE_INCLUDE_PATH);


$icon_lista_left_1 = 'fas fa-laptop-code';
$titulo_lista_left_1 = 'Backoffice';
$texto_lista_left_1 = file_get_contents($url.'texto_lista_left_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_2 = 'fas fa-cash-register';
$titulo_lista_left_2 = 'PDV - Ponto de venda';
$texto_lista_left_2 = file_get_contents($url.'texto_lista_left_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_3 = 'fas fa-truck';
$titulo_lista_left_3 = 'Delivery';
$texto_lista_left_3 = file_get_contents($url.'texto_lista_left_3.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_1 = 'fas fa-heart';
$titulo_lista_right_1 = 'Produtos e Serviços';
$texto_lista_right_1 = file_get_contents($url.'texto_lista_right_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_2 = 'fas fa-award';
$titulo_lista_right_2 = 'Experiência do Cliente';
$texto_lista_right_2 = file_get_contents($url.'texto_lista_right_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_3 = 'fas fa-chart-pie';
$titulo_lista_right_3 = 'Indicadores e KPIS';
$texto_lista_right_3 = file_get_contents($url.'texto_lista_right_3.txt', FILE_USE_INCLUDE_PATH);