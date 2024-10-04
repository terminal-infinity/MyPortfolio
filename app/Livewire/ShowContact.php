<?php

namespace App\Livewire;

use App\Mail\ComtactMail;
use App\Models\ContactPage;
use App\Models\HomePage;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowContact extends Component
{
    #[Layout('components.layouts.navbar')]

    public $name = '';
    public $email = '';
    public $message = '';
    public $subject = '';

    protected $rules =[
        'name' => 'required',
        'email' => 'required|email',
    ];

    public function submit(){
        $this->validate();

        $mailData = [
            'subject' => $this->subject,
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        Mail::to('admin@example.com')->send(new ComtactMail($mailData));

        $this->redirect('/contact');
    }
    public function render()
    {
        $data = HomePage::orderBy('name','ASC')->get();

        $contact = ContactPage::orderBy('address','ASC')->get();


        return view('livewire.show-contact',[
            'data'=> $data,
            'contact'=> $contact
        ]);
    }
}
