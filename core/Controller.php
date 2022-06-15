<?php
class Controller {
    public function loadView($viewName, $viewData = array()){
        extract($viewData); // transfoma o array em varias variaveis
        require 'views/'.$viewName.'.php';
    }
    public function loadTemplate($viewName, $viewData = array()){
        require 'views/template.php';
    }
    public function loadViewInTemplate($viewName, $viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }
}