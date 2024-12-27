<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Listtodos extends Component
{

    public $todos, $title, $status;

    protected $listeners = [
        'notify',
    ];

    public function add()
    {
        $this->validate([
           'title' => 'required|string|max:255',
        ]);

        Todo::create([
            'title' => $this->title,
        ]);

        $this->title = '';

        session()->flash('message', 'The todo has been added!');

    }

    public function notify($message)
    {
        session()->flash('message', $message);
    }

    public function render()
    {
        // $this->todos = Todo::all();
        // $this->todos = Todo::oldest('completed')->latest()->get();
        // $this->todos = auth()->user()->oldest('completed')->latest()->get();
        $this->todos = Todo::with('user')->oldest('completed')->latest()->get();
        return view('livewire.todos.listtodos')->layout('layouts.app');
    }
}
