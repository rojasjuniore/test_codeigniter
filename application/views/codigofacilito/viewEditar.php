<body>
<?=form_open("/CursosControllers/actualizar/".$id)?>
<?
$nombre = array(
    'name' => 'nombres',
    'placeholder' => 'Escribe un nombre',
    'value'=>$cursos->result()[0]->nombreCurso
);
$video= array(
    'name' => 'videos',
    'placeholder' => 'Catida de video',
    'value'=>$cursos->result()[0]->videoCurso
);
?>

<?=form_label('Nombre: ', 'nombres');?>
<?=form_input($nombre);?>
<br><br>
<?=form_label('Numero de Videos: ', 'videos');?>
<?=form_input($video);?>
<br><br>
<?=form_submit('', 'Actuzalizar Registro');?>
<?=form_close();?>
</body>
</html>