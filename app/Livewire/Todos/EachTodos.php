<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;

class EachTodos extends Component
{

    public Todo $todo;
    public $completed;

    public function changeCompleted($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
        $this->emitUp('notify', "The todo has been completed!");
    }

    public function render()
    {
        return view('livewire.todos.each-todos');
    }
}
