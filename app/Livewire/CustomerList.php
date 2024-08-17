<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerList extends Component
{
    public $customers=[];
    public $customer="";
    public $search='';

    // public function mount()
    // {
    //     $this->customers=Customer::all();
    // }

    public function render()
    {
        if(! $this->search){
            $this->customers=Customer::all();
        }
        else{
            $this->customers=Customer::where('name','like','%'.$this->search.'%')->get();
        }

        return view('livewire.customer-list');
    }

    public function deleteCustomer(Customer $customer)
    {
        $customer->delete();

        session()->flash('success','customer deleted successfully');

        return $this->redirect('/customer',navigate:true);
    }

}
