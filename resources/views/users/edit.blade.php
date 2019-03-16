<form action="<?=url('/user/edit/'.$user->id)?>" method="post">
    {{ csrf_field() }}
    <input type="text" placeholder="Nombre" name="nombre" value="<?=$user->name?>"><br>
    <input type="text" placeholder="Email" name="email" value="<?=$user->email?>"><br>
    <input type="text" placeholder="Contraseña" name="pass"><br>
    <input type="submit" value="Guardar">
</form>