# PLANEJAMENTO

Usuario(users)

Usuario X tarefa
    um usuario pode criar várias tarefas

Tarefas(tasks)

tarefa X categoria
    Uma tarefa SEMPRE vai pertencer a uma categoria

Categorias(categories)

categorias X tarefas
    Uma categoria pode TER varias tarefas

Categoria X Usuario
    Uma categoria SEMPRE vai pertencer a um usuario

###detalhes das migrations

> Usuario:  ^padrão^ ^do^ ^laravel^   
> Tarefa:  ^id,^ ^titulo,^ ^data,^ ^descricao,^ ^categoria_id,^ ^usuario_id^  
> Categoria:  ^id,^ ^name,^ ^cor(hexadecimal),^ ^user_id^ 



O laravel tem um terminal que para acessa-lo digite no terminal, além de ser uma maneira mais sofisticada de se testar relacionamentos.
>$ php artisan tinker
