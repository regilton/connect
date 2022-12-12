<?php
include('header.php');

foreach ($_REQUEST as $___opt => $___val) {
  $$___opt = $___val;
}
if (empty($topicos)) {
  include("view/home.php");
} elseif (substr($topicos, 0, 4) == 'http' or substr($topicos, 0, 1) == "/" or substr($topicos, 0, 1) == ".") {
  echo '<br>
<font face=arial size=11px>
<br>
<b>A página não existe :( </b>
<br>Por favor selecione uma página a partir do Menu principal.</font>';
} 
else {
  include("$topicos.php");
}

 include('footer.php'); ?>