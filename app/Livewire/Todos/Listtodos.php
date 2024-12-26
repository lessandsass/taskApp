<?php

namespace App\Livewire\Todos;

use Livewire\Component;

class Listtodos extends Component
{
    public function render()
    {
        return view('livewire.todos.listtodos')->layout('layouts.app');
    }
}
