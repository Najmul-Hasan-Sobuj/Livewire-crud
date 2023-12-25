<?php

namespace App\Livewire;

use Livewire\Component;

class InputField extends Component
{
    public $type;
    public $name;
    public $value;
    public $label;
    public $validationError;

    public function mount($type, $name, $label, $value = '')
    {
        $this->type  = $type;
        $this->name  = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render()
    {
        return view('livewire.input-field');
    }
}
