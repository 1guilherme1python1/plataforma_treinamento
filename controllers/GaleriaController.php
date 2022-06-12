<?php

class GaleriaController extends Controller{
    public function index(){
        $dados = array(
            'qt' => 129
        );
        $this->loadTemplate('Galeria', $dados);
    }
}