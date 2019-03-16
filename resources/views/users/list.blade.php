<a href="<?=url('/user/new')?>">Nuevo</a>
<ul>
@if (sizeof($users) > 0)
    @foreach ($users as $user)
        <li><?=$user->name?> <a href="<?=url('/user/edit/'.$user->id)?>">Editar</a> <a href="<?=url('/user/delete/'.$user->id)?>">Eliminar</a></li>
    @endforeach
@else
    <p>Sin usuarios</p>
@endif
</ul>