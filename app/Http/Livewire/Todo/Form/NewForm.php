<?php

namespace App\Http\Livewire\Todo\Form;

use App\Models\Todo;
use Livewire\Component;

class NewForm extends Component
{    public $name;
    public $price;
   
    public function render()
    {
        return view('livewre.Components.forme');
    }

    public function submit(){
       dd($this->name);
       
    }
   
}
