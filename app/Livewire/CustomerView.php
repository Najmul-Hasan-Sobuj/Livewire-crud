<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerView extends Component
{
    public Customer $customer;

    /**
     * Mount the component with the given customer.
     *
     * @param  Customer $customer
     * @return void
     */
    public function mount(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Render the component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): \Illuminate\View\View
    {
        return view('livewire.customer-view');
    }
}
