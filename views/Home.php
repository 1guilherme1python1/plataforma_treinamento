<h1>Seus cursos</h1>
<?php foreach($cursos as $curso):?>
<a href="<?php echo BASE_URL?>cursos/entrar/<?php echo $curso['id_curso']?>">
    <div class="cursoItem">
        <img src="<?php echo BASE_URL?>assets/images/<?php echo $curso['imagem']?>"  width="200" height="150"/><br><br>
        <strong><?php echo $curso['nome'];?></strong><br><br>
        <?php echo $curso['descricao'];?>
    </div>
</a>
<?php endforeach; ?>