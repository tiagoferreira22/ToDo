
<div class="task">
    <div class="title">
        <input type="checkbox"
            @if ($data && $data['is_done'])
                checked
            @endif
        >
        <div class="task_title">{{$data['title'] ?? ''}}</div>
    </div>

    <div class="priority">
        <div class="sphere"></div>
        <div>{{$data['category']->title ?? ''}}</div>
    </div>

    <div class="actions">

        <x-edit-button url="{{route('task.edit', ['id' => $data['id']])}}"></x-edit-button>
        <x-delete-button url="{{route('task.destroy', ['id' => $data['id']])}}"></x-delete-button>

    </div>
</div>
