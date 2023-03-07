<?php

namespace App\Http\Livewire\Todo\Table;

use Livewire\Component;
use App\Models\Todo;

class NewTable extends Component
{

  
    public function render()
    {    $task= Todo::all();
        return view('livewre.table',compact('task'));
    }
}
