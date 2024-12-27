<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use App\Models\User;
use Livewire\Component;

class Listtodos extends Component
{

    public $todos, $title, $description, $status;

    protected $listeners = [
        'notify',
    ];

    public function add()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
        ]);

        auth()->guard()->user()->todos()->create([
            'title' => $this->title,
            'description' => $this->description
        ]);

        $this->title = '';
        $this->description = '';

        session()->flash('message', 'The todo has been added!');

    }

    public function notify($message)
    {
        session()->flash('message', $message);
    }

    public function render()
    {
        $this->todos = auth()->user()->todos()->oldest('completed')->latest()->get();
        return view('livewire.todos.listtodos')->layout('layouts.app');
    }
}
