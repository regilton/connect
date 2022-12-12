<?php
$icon = "icon-segmento-supermercado-01.svg";
$bg_top_pagina = 'bg-gradient-success ';
$bg_img_pagina = '../img/banner/inner/slider-supermercado.jpg';
$url = 'txt/supermercados/';
$color_btn = 'btn-success';
$color_square_icon = 'bg-success';
$txt_color = 'text-success';
$dot = 'dot-shape-green.png';
$shape = 'color-shape.svg';
$bg_card='bg-success';

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


$img_banner_1_widget = 'market-1.jpg';
$titulo_bloco_1 = 'Sistema desenvolvido por especialistas';
$icon_bloco_1 = 'text-success fas fa-certificate';
$resenha_bloco_1 = file_get_contents($url.'resenha_bloco_1.txt', FILE_USE_INCLUDE_PATH);

$img_banner_2_widget = 'market-2.jpg';
$titulo_bloco_2 = 'Sistema pensado para o segmento';
$icon_bloco_2 = 'text-success fas fa-certificate';
$resenha_bloco_2 = file_get_contents($url.'resenha_bloco_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_1 = 'fas fa-shopping-cart';
$titulo_lista_left_1 = 'Compras, estoque, preço e produção';
$texto_lista_left_1 = file_get_contents($url.'texto_lista_left_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_2 = 'far fa-file-alt';
$titulo_lista_left_2 = 'Planejamento Controle e Visão';
$texto_lista_left_2 = file_get_contents($url.'texto_lista_left_2.txt', FILE_USE_INCLUDE_PATH);
// not

$icon_lista_left_3 = 'fas fa-store-alt';
$titulo_lista_left_3 = 'Loja Própria, Gestão de Clientes e Serviços';
$texto_lista_left_3 = file_get_contents($url.'texto_lista_left_3.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_1 = 'fas fa-bullhorn';
$titulo_lista_right_1 = 'Marketing';
$texto_lista_right_1 = file_get_contents($url.'texto_lista_right_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_2 = 'fas fa-truck-loading';
$titulo_lista_right_2 = 'Recebimento, Estoque e Transporte';
$texto_lista_right_2 = file_get_contents($url.'texto_lista_right_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_3 = 'fas fa-mobile-alt';
$titulo_lista_right_3 = 'Vendas e Gestão Mobile';
$texto_lista_right_3 = file_get_contents($url.'texto_lista_right_3.txt', FILE_USE_INCLUDE_PATH);