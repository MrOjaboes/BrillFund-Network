<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $searchTerm =null;
    public function render()
    {
        $users = $this->searchUser();
        //$users = User::where('user_type',0)->orderBy('id','DESC')->latest()->paginate(10);
        return view('livewire.admin.user-page',compact('users'));
    }
    public function searchUser()
{
   // dd('ok');
    return User::query()
    ->where('user_type',0)
    ->where('name','like','%'.$this->searchTerm.'%') 
    ->latest()->paginate(10);
}
    public function banUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->status = 1;
            $user->save();        }
        return redirect()->back();
    }
    public function makeVendor($id)
    {
       // dd($id);
        $user = User::find($id);
        if ($user) {
            $user->user_type = 2;
            $user->save();        }
        return redirect()->back();
    }
    public function activateUser($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->status = 0;
            $user->save();        }
        return redirect()->back();
    }
}
