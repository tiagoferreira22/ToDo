<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- css --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    {{-- fonts do Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <title>
        Todo App
    </title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            LOfof
        </div>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa
                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do Dia</h2>
                        <hr>
                        datatatat
                    </div>
                    <div class="graph_header_subtitle">
                        Tarefas: <b>3/6</b>
                    </div>
                    <div class="graph_placeholder"></div>

                    <p class="graph_header_tasks_left">Restam 3 tarefas para serem realizadas</p>

                </section>
                <section class="list">
                    <div class="list_header">
                        <select class="list_header_select">
                            <option value="1">Todas as tarefas</option>
                        </select>
                    </div>

                    <div class="task_list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="">
                                <h1>Titulo da tarega</h1>
                            </div>

                            <div class="priority">
                                <div class="sphere">

                                </div>
                                <h1>Titulo da tarega</h1>
                            </div>

                            <div class="actions">
                                Editar - Excluir
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>

    </div>
</body>
</html>
