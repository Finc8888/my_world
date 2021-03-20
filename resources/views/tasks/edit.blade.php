@extends('layout')

@section('head')
    <link href="{{url("")}}/css/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('main')
    <div id="main">
        <div class="container">
            <div class="row">
                <h1 class="title">Редактировать задачу</h1>
                <form method="POST" action="{{ URL::to("/tasks/{$task->id}",[], true) }}">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label for="task" class="label">Задача</label>
                    </div>

                    <div class="control">
                        <input
                            type="text"
                            class="input @error('title') is-danger @enderror"
                            name="title"
                            id="task"
                            value="{{old('title') ?? $task->title}}"
                        >

                        @error('title')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="description" class="label">Подробное описание</label>
                    </div>

                    <div class="control">
                        <textarea
                            class="input @error('description') is-danger @enderror"
                            name="description"
                            id="description">{{old('description') ?? $task->description}}
                        </textarea>
                        @error('description')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="tag" class="label">Выбор тега</label>
                    </div>

                    <div class="control">
                        <select id="tag" name="tag" >
                            @foreach(
                                [
                                    'physical'=>'Физическая сфера',
                                    'intellectual'=>'Интеллектуальная сфера',
                                    'spiritual'=>'Духовная сфера',
                                    'social'=>'Социальная сфера'
                                ]
                                as $tag=> $value)
                                <option value="{{$tag}}" {{ $task->tag === $tag ? 'selected' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="is-urgent" class="label">Задача срочная?</label>
                    </div>

                    <div class="control">
                        <select id="is-urgent" name="is_urgent">
                            @foreach(
                                [
                                    'false'=>'Нет',
                                    'true'=>'Да',
                                ]
                                as $isUrgent=> $value)
                                <option value="{{$isUrgent}}" {{ $task->is_urgent == $isUrgent ? 'selected' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="is-important" class="label">Задача важная?</label>
                    </div>

                    <div class="control">
                        <select id="is-important" name="is_important">
                            @foreach(
                                [
                                    'false'=>'Нет',
                                    'true'=>'Да',
                                ]
                                as $isImportant=> $value)
                                <option value="{{$isImportant}}" {{ $task->is_important == $isImportant ? 'selected' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="status" class="label">Задача еще актуальна?</label>
                    </div>

                    <div class="control">
                        <select id="status" name="status">
                            @foreach(
                                [
                                    'false'=>'Нет',
                                    'true'=>'Да',
                                ]
                                as $status=> $value)
                                <option value="{{$status}}" {{ $task->status == $isImportant ? 'selected' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field">
                        <label for="type" class="label">Тип задачи</label>
                    </div>

                    <div class="control">
                        <select id="type" name="type">
                            @foreach(
                                [
                                    'week'=>'Недельная',
                                    'year'=>'Годовая',
                                    'month'=>'Месечная',
                                    'day'=>'Дневная',
                                ]
                                as $type=> $value)
                                <option value="{{$type}}" {{ $task->type === $type ? 'selected' : ''}}>{{$value}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Редактировать</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>
@endsection
