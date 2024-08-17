<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerComponent extends Component
{
    public $name="";
    public $email="";
    public $phone="";

    public function render()
    {
        return view('livewire.customer-component');
    }

    public function save()
    {
        // dd($this->all());
        $validated=$this->validate([
            'name'=>'required|string|max:25',
            'email'=>'required|email|unique:Customers',
            'phone'=>'required|string|unique:Customers'
        ]);

        Customer::create($validated);
    }
}
