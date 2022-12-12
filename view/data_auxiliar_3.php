<?php
$icon = "icon-segmento-varejo-01.svg";
$bg_top_pagina = 'bg-gradient-dark';
$bg_img_pagina = '../img/banner/inner/slider-loja2.jpg';
$url = 'txt/magazine/';
$color_btn = 'btn-dark';
$color_square_icon = 'bg-dark';
$txt_color = 'text-dark';
$dot = 'dot-shape.png';
$shape = 'color-shape-dark.svg';
$bg_card='bg-dark';

// #8965e0
$titulo_pagina = 'Magazines';
$copy_pagina = file_get_contents($url . 'copy.txt', FILE_USE_INCLUDE_PATH);
$subtitulo = file_get_contents($url . 'subtitulo.txt', FILE_USE_INCLUDE_PATH);
// resenha
$titulo_resenha = file_get_contents($url . 'tituloResenha.txt', FILE_USE_INCLUDE_PATH);
$texto_resenha = file_get_contents($url . 'textoResenha.txt', FILE_USE_INCLUDE_PATH);

// icones e resenha
$icon_1_resenha = 'far fa-clock';
$titulo_1_resenha = 'Suas vendas em tempo real';
$texto_1_resenha = file_get_contents($url . 'texto_1_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_2_resenha = 'fas fa-box';
$titulo_2_resenha = 'Reduza custos no estoque';
$texto_2_resenha = file_get_contents($url . 'texto_2_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_3_resenha = 'fas fa-chart-line';
$titulo_3_resenha = 'Gerencie com facilidade';
$texto_3_resenha = file_get_contents($url . 'texto_3_resenha.txt', FILE_USE_INCLUDE_PATH);

// ******
$img_banner_1_widget = 'magazine-1.jpg';
$titulo_bloco_1 = 'Gerenciamento de um amplo mix de produtos em diversos PDVs';
$icon_bloco_1 = 'text-dark fas fa-thumbs-up';
$resenha_bloco_1 = file_get_contents($url.'resenha_bloco_1.txt', FILE_USE_INCLUDE_PATH);

$img_banner_2_widget = 'magazine-2.jpg';
$titulo_bloco_2 = 'Varejo físico e digital para sua empresa vender mais ';
$icon_bloco_2 = 'text-success fas fa-certificate';
$resenha_bloco_2 = file_get_contents($url.'resenha_bloco_2.txt', FILE_USE_INCLUDE_PATH);


$icon_lista_left_1 = 'fas fa-tasks';
$titulo_lista_left_1 = 'Gestão de compras, estoque e preço';
$texto_lista_left_1 = file_get_contents($url.'texto_lista_left_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_2 = 'fas fa-user-edit';
$titulo_lista_left_2 = 'Planejamento e controle';
$texto_lista_left_2 = file_get_contents($url.'texto_lista_left_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_3 = 'fas fa-truck';
$titulo_lista_left_3 = 'Expedição, Transporte e estoque';
$texto_lista_left_3 = file_get_contents($url.'texto_lista_left_3.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_1 = 'fas fa-heart';
$titulo_lista_right_1 = 'Produtos e Serviços';
$texto_lista_right_1 = file_get_contents($url.'texto_lista_right_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_2 = 'fas fa-truck-loading';
$titulo_lista_right_2 = 'Recebimento, Estoque e Transporte';
$texto_lista_right_2 = file_get_contents($url.'texto_lista_right_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_3 = 'fas fa-mobile-alt';
$titulo_lista_right_3 = 'Vendas e Gestão Mobile';
$texto_lista_right_3 = file_get_contents($url.'texto_lista_right_3.txt', FILE_USE_INCLUDE_PATH);