<?php

class HomeController extends Controller{
    public function index(){
        $anuncios = new Anuncios();
        $usuarios = new Usuarios();

        $dados = array(
            'quantidade' => $anuncios->getQuatidade(),
            'nome' => $usuarios->getNome(),
            'idade' => $usuarios->idade()
        );
        
        $this->loadTemplate('Home', $dados);
    }
}