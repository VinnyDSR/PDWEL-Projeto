<?php

require_once 'app/Core/Core.php';
require_once 'lib/Database/Connection.php';
require_once 'app/Controller/HomeController.php';
require_once 'app/Controller/ErroController.php';
require_once 'app/Model/Transacao.php';
require_once 'vendor/autoload.php';



$template = file_get_contents('app/Template/estrutura.html');

ob_start();//pegar retorno e armazenar em uma variavel


    $core = new Core;
    $core->start($_GET);
    
    $saida = ob_get_contents();
    
ob_end_clean();    

$tplPronto = str_replace('{{area_dinamica}}', $saida, $template);

//var_dump($saida);

echo  $tplPronto;
//var_dump($template);
