@extends('layout')
@section('main')
    <!-- Main -->
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">
                Component
            </p>
            <button class="card-header-icon" aria-label="more options">
      <span class="icon">
        <i class="fas fa-angle-down" aria-hidden="true"></i>
      </span>
            </button>
        </header>
        <div class="card-content">
            <div class="content">
                <p ><span>Заголовок задачи: </span><span>{{$task->title}}</span></p>
                <p><span>Подробное описание: </span><span>{{$task->description}}</span></p>
                <p><span>Тег: </span><span>{{$task->tag}}</span></p>
                <p><span>Тип: </span><span>{{$task->type}}</span></p>
                <p><span>Важность: </span><span>{{$task->is_important}}</span></p>
                <p><span>Срочность: </span><span>{{$task->is_urgent}}</span></p>
                <p><span>Актуальность: </span><span>{{$task->status}}</span></p>
            </div>
        </div>
        <footer class="card-footer">
            <a href="{{url("tasks")}}/{{$task->id}}/edit" class="card-footer-item">Edit</a>
            <a href="#" class="card-footer-item">Delete</a>
        </footer>
    </div>


@endsection
