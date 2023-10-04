<?php

namespace App\Http\Livewire\Admin;

use App\Models\Deposits;
use Livewire\Component;
use Livewire\WithPagination;

class DepositPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title;
    public $price;
    public function render()
    {
        $deposits = Deposits::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.deposit-page',compact('deposits'));
    }
}
