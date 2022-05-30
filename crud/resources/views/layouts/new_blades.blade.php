<?
/*
@role('root')
    <p>Есть роль супер-администратора</p>
@else
    <p>Нет роли супер-администратора</p>
@endrole


@perm('edit-post')
    <p>Есть право редактировать посты</p>
@else
    <p>Нет права редактировать посты</p>
@endperm

@allperms('edit-post', 'delete-post')
    <p>Есть право редактировать и удалять посты</p>
@endallperms

@anyperms('edit-post', 'delete-post')
    <p>Есть по крайней мере одно право</p>
@endanyperms
