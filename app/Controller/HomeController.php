<?php

class HomeController
{
    public function index()
    {
        try {
            $colecTransacoes = Transacao::selecionaTodos();
            
            $loader = new \Twig\Loader\FilesystemLoader('app/View');
            $twig = new \Twig\Environment($loader);
            
            $template = $twig->load('home.php');
            
            $parametros = array();
            $parametros['transacoes'] = $colecTransacoes;
            //var_dump($colecTransacoes);
            //$parametros['nome'] = 'Rubens';
            
            $conteudo = $template->render($parametros);
            echo $conteudo;
           // var_dump($colecTransacoes);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        //echo 'teste';
    }
    
    public function insert() {
        
    }
    
}

