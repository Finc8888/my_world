@extends('layout')

@section('head')
    <link href="{{url("")}}/css/form.css" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('main')
    <div id="main">
        <div class="container">
            <div class="row">
                <h1 class="title">Создать задачу</h1>
                <form method="POST" action="{{ URL::to('/tasks',array(), true) }}">
                    @csrf
                    <div class="field">
                        <label for="task" class="label">Задача</label>
                    </div>

                    <div class="control">
                        <input
                            type="text"
                            class="input @error('title') is-danger @enderror"
                            name="title"
                            id="task"
                            value="{{old('title')}}"
                        >

                        @error('title')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="description" class="label">Подробное описание</label>
                    </div>

                    <div class="control">
                        <textarea  class="input @error('description') is-danger @enderror" name="description" id="description">{{old('description')}}</textarea>
                        @error('description')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="tag" class="label">Выбор тега</label>
                    </div>

                    <div class="control">
                        <select class="@error('tag') is-danger @enderror" id="tag" name="tag" >
                            <option value="physical">Физическая сфера</option>
                            <option value="intellectual">Интеллектуальная сфера</option>
                            <option value="spiritual">Духовная сфера</option>
                            <option value="social">Социальная сфера</option>
                        </select>
                        @error('tag')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="is-urgent" class="label">Задача срочная?</label>
                    </div>

                    <div class="control">
                        <select class="@error('is_urgent') is-danger @enderror" id="is-urgent" name="is_urgent">
                            <option value="false">Нет</option>
                            <option value="true">Да</option>
                        </select>
                        @error('is_urgent')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="is-important" class="label">Задача важная?</label>
                    </div>

                    <div class="control">
                        <select class="@error('is_important') is-danger @enderror" id="is-important" name="is_important">
                            <option value="true">Да</option>
                            <option value="false">Нет</option>
                        </select>
                        @error('is_important')
                            <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="status" class="label">Задача еще актуальна?</label>
                    </div>

                    <div class="control">
                        <select class="@error('status') is-danger @enderror" id="status" name="status">
                            <option value="true">Да</option>
                            <option value="false">Нет</option>
                        </select>
                        @error('status')
                        <p class="help is-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="task-type" class="label">Тип задачи</label>
                    </div>

                    <div class="control">
                        <select class="@error('type') is-danger @enderror" id="type" name="type">
                            <option value="week">Недельная</option>
                            <option value="year">Годовая</option>
                            <option value="month">Месечная</option>
                            <option value="day">Дневная</option>
                        </select>
                        @error('type')
                            <p class="help is-danger">{{$errors->first('type')}}</p>
                        @enderror
                    </div>

                    <div class="field is-grouped">
                        <div class="control">
                            <button class="button is-link" type="submit">Создать</button>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>
@endsection
