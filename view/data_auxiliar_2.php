<?php
$icon = "icon-segmento-moda-01.svg";
$bg_top_pagina = 'bg-gradient-primary';
$bg_img_pagina = '../img/banner/inner/slider-moda.jpg';
$url = 'txt/moda/';
$color_btn = 'btn-primary';
$color_square_icon = 'bg-primary';
$txt_color = 'text-primary';
$dot = 'dot-shape-primary.png';
$shape = 'color-shape-primary.svg';
$bg_card='bg-primary';

$titulo_pagina = 'Moda';
$copy_pagina = file_get_contents($url . 'copy.txt', FILE_USE_INCLUDE_PATH);
$subtitulo = file_get_contents($url . 'subtitulo.txt', FILE_USE_INCLUDE_PATH);
// resenha
$titulo_resenha = file_get_contents($url . 'tituloResenha.txt', FILE_USE_INCLUDE_PATH);
$texto_resenha = file_get_contents($url . 'textoResenha.txt', FILE_USE_INCLUDE_PATH);

// icones e resenha
$icon_1_resenha = 'far fa-file-alt';
$titulo_1_resenha = 'Planejamento e controle';
$texto_1_resenha = file_get_contents($url . 'texto_1_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_2_resenha = 'far fa-money-bill-alt';
$titulo_2_resenha = 'Reduza prejuízos no estoque';
$texto_2_resenha = file_get_contents($url . 'texto_2_resenha.txt', FILE_USE_INCLUDE_PATH);

$icon_3_resenha = 'fas fa-chart-line';
$titulo_3_resenha = 'Acompanhe os resultados';
$texto_3_resenha = file_get_contents($url . 'texto_3_resenha.txt', FILE_USE_INCLUDE_PATH);

// ******
$img_banner_1_widget = 'fashion-1.jpg';
$titulo_bloco_1 = 'Aumento das vendas e fidelização dos clientes';
$icon_bloco_1 = 'text-primary fas fa-heart';
$resenha_bloco_1 = file_get_contents($url.'resenha_bloco_1.txt', FILE_USE_INCLUDE_PATH);

$img_banner_2_widget = 'fashion-2.jpg';
$titulo_bloco_2 = 'Varejo físico e digital para sua empresa vender mais ';
$icon_bloco_2 = 'text-success fas fa-certificate';
$resenha_bloco_2 = file_get_contents($url.'resenha_bloco_2.txt', FILE_USE_INCLUDE_PATH);


$icon_lista_left_1 = 'fas fa-glasses';
$titulo_lista_left_1 = 'Estilo, planejamento, compras e gestão';
$texto_lista_left_1 = file_get_contents($url.'texto_lista_left_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_2 = 'fas fa-user-tag';
$titulo_lista_left_2 = 'Produtos e clientes';
$texto_lista_left_2 = file_get_contents($url.'texto_lista_left_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_left_3 = 'fas fa-motorcycle';
$titulo_lista_left_3 = 'Expedição, Transporte e estoque';
$texto_lista_left_3 = file_get_contents($url.'texto_lista_left_3.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_1 = 'fas fa-heart';
$titulo_lista_right_1 = 'Omnichanel, Relacionamento e serviços';
$texto_lista_right_1 = file_get_contents($url.'texto_lista_right_1.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_2 = 'fas fa-truck-loading';
$titulo_lista_right_2 = 'Recebimento, Estoque e Transporte';
$texto_lista_right_2 = file_get_contents($url.'texto_lista_right_2.txt', FILE_USE_INCLUDE_PATH);

$icon_lista_right_3 = 'fas fa-mobile-alt';
$titulo_lista_right_3 = 'Vendas e Gestão Mobile';
$texto_lista_right_3 = file_get_contents($url.'texto_lista_right_3.txt', FILE_USE_INCLUDE_PATH);