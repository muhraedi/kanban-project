@extends('layouts.master')

@section('pageTitle', $pageTitle)

@section('main')
  @php
    use App\Models\Task;
  @endphp
  <div class="task-list-container">
    <h1 class="task-list-heading">{{ $pageTitle }}</h1>

    <div class="task-progress-board">
      @include('partials.task_column', [
        'title' => 'Not Started',
        'tasks' => $tasks['not_started'],
        'leftStatus' => null,
        'rightStatus' => 'in_progress',
        'checkedStatus' => 'completed',
      ])

      @include('partials.task_column', [
        'title' => 'In Progress',
        'tasks' => $tasks['in_progress'],
        'leftStatus' => 'not_started',
        'rightStatus' => 'in_review',
        'checkedStatus' => 'completed',
      ])

      @include('partials.task_column', [
        'title' => 'In Review',
        'tasks' => $tasks['in_review'],
        'leftStatus' => 'in_progress',
        'rightStatus' => 'completed',
        'checkedStatus' => 'completed',
      ])

      @include('partials.task_column', [
        'title' => 'Completed',
        'tasks' => $tasks['completed'],
        'leftStatus' => 'in_review',
        'rightStatus' => null,
        'checkedStatus' => null,
      ])
    </div>
  </div>
@endsection
