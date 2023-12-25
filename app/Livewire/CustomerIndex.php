<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerIndex extends Component
{
    public $customers;

    public function mount()
    {
        $this->loadCustomers();
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        session()->flash('message', 'Customer deleted successfully.');
        $this->customers = $this->customers->except($customer->id);
    }

    public function render()
    {
        return view('livewire.customer-index', ['customers' => $this->customers]);
    }

    private function loadCustomers()
    {
        $this->customers = Customer::all();
    }
}
