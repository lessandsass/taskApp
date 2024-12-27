<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;

class EachTodos extends Component
{

    public Todo $todo;
    public $completed;
    public $title;
    // public $modelOpened = false;

    public function changeCompleted($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
        $this->dispatch('notify', "The todo has been completed!");
    }

    public function mount($todo)
    {
        $this->title = $todo->title;
    }

    public function render()
    {
        return view('livewire.todos.each-todos');
    }
}
