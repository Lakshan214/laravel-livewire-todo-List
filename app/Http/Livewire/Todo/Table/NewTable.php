<?php

namespace App\Http\Livewire\Todo\Table;

use Livewire\Component;
use App\Models\Todo;

class NewTable extends Component
{

      
    public function mount()
    {
        $task= Todo::all();
        return view('welcome',compact('task'));
       
    }
    public function render()
    {
        return view('livewre.table');
    }
}
