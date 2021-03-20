<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
//    /** Определение заполняемых свойств для массового заполнения
//     * @var string[]
//     */
//    protected $fillable = ['title', 'description', 'is_important', 'is_urgent', 'type','tag'];

    /**
     * Определение защищенных свойств для массового заполнения
     * @var array
     */
    protected $guarded = [];

    /**
     * Если для роута используется поле отличное от id
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'id';
    }

    /**
     * Обращение к наиболее частому ресурсу API
     */
    public function path()
    {
       return  route('tasks.index');
    }
}
