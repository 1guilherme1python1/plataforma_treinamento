<?php

class Cursos extends Model{

    private $info;

    public function  getCursosDoAluno($id){
        $array = array();
        $sql = $this->db->query("SELECT 
            aluno_cursos.id_curso,
            cursos.nome,
            cursos.imagem,
            cursos.descricao 
        FROM 
            aluno_cursos
        LEFT JOIN cursos
            ON aluno_cursos.id_curso = cursos.id 
        WHERE 
            aluno_cursos.id_aluno='$id'
        ");
        $array = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $array;
    }
    public function setCursos($id){
        $sql = $this->db->query("SELECT * FROM cursos WHERE id='$id'");
        if($sql->rowCount()>0){
            $this->info = $sql->fetch(PDO::FETCH_ASSOC);
        } 
    }
    public function getNome(){
        return $this->info['nome'];
    }
    public function getImagem(){
        return $this->info['imagem'];
    }
    public function getDesc(){
        return $this->info['descricao'];
    }
}