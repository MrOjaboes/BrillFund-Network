<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ContactUs;
use Livewire\WithPagination;

class ContactUsPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $name,$email,$phone,$content;
    public function render()
    {
        $contacts = ContactUs::orderBy('created_at','DESC')->latest()->paginate(10);
        return view('livewire.admin.contact-us-page',compact('contacts'));
    }
    public function edit($id)
    {
        $this->updateMode = true;
        $contact = ContactUs::where('id', $id)->first();
        $this->location_id = $id;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->content = $contact->content;
    }


}
