<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

/**
 * Livewire component for creating a new customer.
 */
class CustomerCreate extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    /**
     * Validate a specific property.
     *
     * @param string $propertyName The name of the property to validate.
     */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules());
    }


    /**
     * Store a new customer in the database.
     */
    public function store()
    {
        $this->validate($this->validationRules());

        Customer::create($this->validatedData());

        $this->reset();
        session()->flash('message', 'Customer successfully created.');
    }

    /**
     * Get the validation rules for customer.
     *
     * @return array Validation rules.
     */
    private function validationRules(): array
    {
        return [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
        ];
    }

    /**
     * Get validated data for customer.
     *
     * @return array Validated data.
     */
    private function validatedData(): array
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ];
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.customer-create');
    }
}
