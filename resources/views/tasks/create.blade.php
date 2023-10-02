<x-layout urlNavbar="{{route('home.index')}}" nameBtnNavbar="Voltar">
    <section id="create_task_section">
        <h1>Criar Tarefa</h1>
        <form action="">

            <div class="inputArea">
                <label for="title">Titulo da task</label>
                <input type="text" name="title" required>
            </div>

        </form>
    </section>
</x-layout>
