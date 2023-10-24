<div class="task-progress-column">
  <div class="task-progress-column-heading">
    <h2>{{ $title }}</h2>
    <div class="task-list-task-buttons">
      <a href="{{ route('tasks.create') }}">
        <span class="material-icons">add</span>
      </a>
    </div>
  </div>
  <div>
    @foreach ($tasks as $task)
      @include('partials.task_card', [
        'task' => $task,
        'leftStatus' => $leftStatus,
        'rightStatus' => $rightStatus,
        'checkedStatus' => $checkedStatus,
      ])
    @endforeach
  </div>
</div>
