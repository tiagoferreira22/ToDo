<x-layout>
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph_header_line"></div>
            <div class="graph_header_date">

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
                </svg>

                13 de Dez

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>

            </div>
        </div>
        <div class="graph_header_subtitle">
            Tarefas: <b>3/6</b>
        </div>
        <div class="graph_placeholder"></div>

        <div class="tasks_left_footer">
            <img src="{{asset('assets/imgs/icon-info.png')}}" alt="">
            Restam 3 tarefas para serem realizadas
        </div>

    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header_select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        <div class="task_list">
            @php
                $tasks = [
                    [
                        'done' => false,
                        'title' => 'minha primeira ..',
                        'category' => 'categoria 1'
                    ],
                    [
                        'done' => true,
                        'title' => 'minha segunda ..',
                        'category' => 'categoria 2'
                    ],
                    [
                        'done' => false,
                        'title' => 'minha terceira ..',
                        'category' => 'categoria 2'
                    ],
                ]
            @endphp
            <x-task :data=$tasks[0]/>
        </div>
    </section>
</x-layout>
