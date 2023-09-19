
<div class="task">
    <div class="title">
        <input type="checkbox" name="" id="">
        <div class="task_title">{{$data['title'] ?? ''}}</div>
    </div>

    <div class="priority">
        <div class="sphere"></div>
        <div>Titulo da tarega</div>
    </div>

    <div class="actions">

        <x-edit-button url="#"></x-edit-button>
        <x-delete-button url="#"></x-delete-button>

    </div>
</div>
