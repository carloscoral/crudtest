<form action="<?=url('/user/new')?>" method="post">
    {{ csrf_field() }}
    <input type="text" placeholder="Nombre" name="nombre"><br>
    <input type="text" placeholder="Email" name="email"><br>
    <input type="text" placeholder="Contraseña" name="pass"><br>
    <input type="submit" value="Guardar">
</form>