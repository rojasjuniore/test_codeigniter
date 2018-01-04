<body>
<?=form_open("/CursosControllers/recibirdatos")?>
<?
$nombre = array(
    'name' => 'nombres',
    'placeholder' => 'Escribe un nombre',
);
$video= array(
    'name' => 'videos',
    'placeholder' => 'Catida de video',
);
?>

<?=form_label('Nombre: ', 'nombres');?>
<?=form_input($nombre);?>
<br><br>
<?=form_label('Numero de Videos: ', 'videos');?>
<?=form_input($video);?>
<br><br>
<?=form_submit('', 'Subir Cursos');?>
<?=form_close();?>
</body>
</html>