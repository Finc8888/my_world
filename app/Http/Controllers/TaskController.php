<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use App\Task;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Получение списка всех задач
     *
     */
    public function index() {
        // дополнительный фильтр по типу
//        dd(request('type'));
        if(request('type')){
            $tasks = Task::latest()->where(['type' => request('type'), 'status' => request('status')])->get();
        }
        else{
            $tasks = Task::latest()->get();
        }

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Отобразить выбранную задачу.
     *
     * @param Task $task
     * @return Application|Factory|Response|View
     */
    public function show(Task $task)
    {

//        $task = DB::table('tasks')->where('name',$name)->first();
        return view('tasks.show', [
            'task' => $task
        ]);

    }

    /**
     * Показать форму для создания новой задачи
     */
    public function create(){
        return view('tasks.create');
    }

    /**
     * Сохранить новую задачу в БД.
     *
     * @return Application|RedirectResponse|Response|Redirector
     */
    public function store()
    {
        //        $task = new Task();
//        $task->title = request('title');
//        $task->description = request('description');
//        $task->tag = request('tag');
//        $task->is_urgent = request('is_urgent');
//        $task->is_important = request('is_important');
//        $task->type = request('type');
//        $task->save();
        Task::create($this->validateTask());

        return redirect((new Task)->path());
    }


    /**
     * Показать форму для редактирования выбранной задачи.
     *
     * @param Task $task
     * @return Application|Factory|Response|View
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }

    /**
     * Обновить выбранную задачу в БД.
     *
     * @param Task $task
     * @return Response
     */
    public function update(Task $task): RedirectResponse
    {
        $task->update($this->validateTask());

        return redirect($task->path());
    }

    /**
     * Удалить выбранную задачу из БД.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(int  $id)
    {
        //
    }

    /**
     * @return array
     */
    protected function validateTask(): array
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'is_urgent' => 'required',
            'is_important' => 'required',
            'type' => 'required',
            'status' => 'required',
            'tag' => 'required'
        ]);
    }
}
