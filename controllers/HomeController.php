<?php
class HomeController extends Controller{
    public function __construct(){
        $alunos = new Alunos();

        if(!$alunos->isLogged()){
            header("Location: ".BASE_URL."login");
        }
    }

    public function index(){
        $dados = array(
            'info'=>array(),
            'cursos'=>array()
        );

        $alunos = new Alunos();
        $alunos->SetAluno($_SESSION['lgaluno']);
        $dados['info'] = $alunos;

        $cursos = new Cursos();
        $dados['cursos'] = $cursos->getCursosDoAluno($alunos->getId());

        $this->loadTemplate('home', $dados);
    }
    
}