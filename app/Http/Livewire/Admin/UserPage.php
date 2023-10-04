<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $users = User::where('user_type',0)->orderBy('id','DESC')->latest()->paginate(10);
        return view('livewire.admin.user-page',compact('users'));
    }
}
