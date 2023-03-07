<?php

namespace App\Http\Livewire\Todo\Form;

use App\Models\Todo;
use Livewire\Component;

class NewForm extends Component
{
    public $task;

    public function mount()
    {
       $this->task=new Todo();
    }
    public function render()
    {
        return view('livewre.Components.forme');
    }

    protected function rules()
    {
        return
        [
          'task.name'=>'required',
          'task.price'=>'required',
        ];
    }

    public function updated($propertyName)
    {
         
        $this->validateOnly($propertyName);

    }

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required',
        ]);
   
        Todo::updateOrCreate(['id' => $this->post_id], [
            'name' => $this->name,
            'price' => $this->price
        ]);
    }
}
