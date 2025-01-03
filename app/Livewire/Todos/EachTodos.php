<?php

namespace App\Livewire\Todos;

use Livewire\Component;
use App\Models\Todo;

class EachTodos extends Component
{

    public Todo $todo;
    public $completed;
    public $title;
    public $description;
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
        $this->description = $todo->description;
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        $this->todo->title = $this->title;
        $this->todo->description = $this->description;
        $this->todo->save();
        $this->dispatch('notify', "The todo has been updated!");
        // session()->flash('message', 'The todo has been added!');
        $this->title = '';
        $this->description = '';
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        $this->dispatch('notify', "The todo has been deleted!");
    }

    public function render()
    {
        return view('livewire.todos.each-todos');
    }
}
