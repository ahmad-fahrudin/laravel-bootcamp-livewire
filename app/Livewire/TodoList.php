<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class TodoList extends Component
{
    #[Validate]
    public $todos = [];

    public $todo = '';

    public function rules()
    {
        return [
            'todo' => 'required|min:5',
        ];
    }

    public function add()
    {
        $this->validate();
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todo-list');
    }
}
