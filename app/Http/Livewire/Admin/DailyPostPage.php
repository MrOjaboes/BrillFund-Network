<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\DailyPost;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class DailyPostPage extends Component
{
    use WithPagination;
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $title,$content,$link,$photo;

    public function render()
    {
        $dailyPost = DailyPost::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.daily-post-page',compact('dailyPost'));
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => 'required',
            'content' => 'required',
            'link' => 'required|url',
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
   // Original File name
   $original_filename = $this->photo->getClientOriginalName();
   // Upload file
   $filename = $this->photo->storeAs('Posts',$original_filename,'public');

   // Check file extension is an image type
   //$extension = strtolower($this->file->extension());

        DailyPost::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'link' => $validated['link'],
            'photo' => $original_filename,
        ]);
        session()->flash('message', 'Post Created Successfully.');
        $this->resetInputFields();
        $this->emit('churchStore'); // Close model to using to jquery
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $item = DailyPost::where('id', $id)->first();
        $this->location_id = $id;
        $this->title = $item->title;
        $this->link = $item->link;
        $this->content = $item->content;
        //$this->photo = $item->photo;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'link' => '',

        ]);
if ($this->photo) {
    $original_filename = $this->photo->getClientOriginalName();
    // Upload file
    $filename = $this->photo->storeAs('Posts',$original_filename,'public');

}
        if ($this->location_id) {

            $item = DailyPost::find($this->location_id);
            $item->update([
                'title' => $this->title,
                'link' => $this->link,
                'content' => $this->content,
                'photo' => $this->photo ? $original_filename : $item->photo,
            ]);
            $this->updateMode = false;
            session()->flash('message', 'Post Updated Successfully.');
            $this->resetInputFields();
        }
    }
    public function delete($id)
    {
        if ($id) {
            DailyPost::where('id', $id)->delete();
            session()->flash('message', 'Post Deleted Successfully.');
        }
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->content = '';
        $this->link = '';
        $this->photo = '';

    }
}
