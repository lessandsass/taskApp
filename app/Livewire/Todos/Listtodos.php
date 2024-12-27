<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Listtodos extends Component
{

    public $todos, $title, $status;

    public function add()
    {
        $this->validate([
           'title' => 'required|string|max:255',
        ]);

        Todo::create([
            'title' => $this->title,
        ]);

        $this->title = '';

        session()->flash('message', 'Your action was successful!');

    }

    public function render()
    {

        // $this->todos = Todo::all();
        $this->todos = Todo::oldest('status')->latest()->get();

        return view('livewire.todos.listtodos')->layout('layouts.app');
    }
}
