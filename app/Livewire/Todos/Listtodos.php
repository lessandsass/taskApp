<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Listtodos extends Component
{

    public $todos;

    public function render()
    {

        // $this->todos = Todo::all();
        $this->todos = Todo::oldest('status')->latest()->get();

        return view('livewire.todos.listtodos')->layout('layouts.app');
    }
}
