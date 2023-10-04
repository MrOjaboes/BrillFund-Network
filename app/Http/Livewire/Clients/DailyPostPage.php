<?php

namespace App\Http\Livewire\Clients;

use Livewire\Component;
use App\Models\DailyPost;
use Livewire\WithPagination;

class DailyPostPage extends Component
{

    use WithPagination;
    // use WithFileUploads;
     protected $paginationTheme = 'bootstrap';

     public function render()
     {
        $current_date = date('Y-m-d');
         $check =  DailyPost::whereDate('created_at', $current_date)->where('user_id',auth()->user()->id)->first();
         $posts =  DailyPost::whereDate('created_at', $current_date)->where('status',0)->latest()->paginate(10);
         // dd($current_date);

         return view('livewire.clients.daily-post-page',compact('posts','check'));
     }

     public function claimPost($id)
     {
        dd($id);
         $post = DailyPost::find($id);
         if ($post) {
             $post->status = 1;
             $post->save();
         }
         return redirect()->back()->with('message','Withdrawal Approved Successfully');
     }
}
