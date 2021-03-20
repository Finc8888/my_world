@extends('layout')
@section('main')
    <!-- Main -->
    <div id="welcome" class="wrapper-style1">
        <div class="title">
            <h5>Список задач</h5>
            <span class="byline">На неделю</span> </div>
        <form method="GET" action="{{ URL::to("/tasks",[], true) }}">
            <div class="select is-primary">
                <select id="type" name="type">
                    @foreach(
                        [
                            'week'=>'Недельная',
                            'year'=>'Годовая',
                            'month'=>'Месечная',
                            'day'=>'Дневная',
                        ]
                        as $type=> $value)
                        <option value="{{$type}}" {{ 'day' === $type ? 'selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>

            <div class="select is-primary">
                <select id="status" name="status">
                    @foreach(
                        [
                            'false'=>'Нет',
                            'true'=>'Да',
                        ]
                        as $status=> $value)
                        <option value="{{$status}}" {{ true == $status ? 'selected' : ''}}>{{$status}}</option>
                    @endforeach
                </select>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Применить фильтр</button>
                </div>
            </div>
        </form>

        <button  class="button is-link">
            <a href="{{url("tasks")}}/create" >Создать</a>
        </button>

    </div>
    <div id="task-list" class="wrapper-style1">
        @foreach($tasks as $index => $task)
            <div id="task{{$index}}" class="task">
                <h3>{{$task->title}}</h3>
                <a href="{{route('tasks.show', $task)}}" class="button">{{$task->tag}}</a>
            </div>
        @endforeach
    </div>
@endsection
