<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;

class EachTodos extends Component
{

    public $todo;

    public function render()
    {
        return view('livewire.todos.each-todos');
    }
}
