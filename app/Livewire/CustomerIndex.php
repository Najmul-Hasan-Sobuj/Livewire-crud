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
        $this->loadCustomers();
    }

    public function render()
    {
        return view('livewire.customer-index', [
            'customers' =>  $this->loadCustomers(),
        ]);
    }

    private function loadCustomers()
    {
        $this->customers = Customer::all();
    }
}
