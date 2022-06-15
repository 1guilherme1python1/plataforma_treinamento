<?php
class CursosController extends Controller{
    public function __construct(){
        $alunos = new Alunos();
        if(!$alunos->isLogged()){
            header("Location: ".BASE_URL."login");
        }
    }
    public function index(){
        header("Location: ".BASE_URL);
    }
    public function entrar($id){
        $dados = array(
            'curso'=>array(),
            'aulas'=>array(),
            'info' =>array()
        );
        $aluno = new Alunos();
        $aluno->setAluno($_SESSION['lgaluno']);
        $dados['info'] = $aluno;

        if($aluno->IsIncrito($id)){
            $cursos = new Cursos();
            $cursos->setCursos($id);
            $dados['curso'] = $cursos;
            $this->loadTemplate('CursoEntrar', $dados);  
        } else {
            header("Location: ".BASE_URL);
        }

        $cursos = new Cursos();

        

        
    }
}