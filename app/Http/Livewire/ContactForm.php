<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $name; 
    public $email;
    public $phone;
    public $message;

    public function submitForm()
    {
        $contact['name'] = $this->name;
        $contact['email'] = $this->email;
        $contact['phone'] = $this->phone;
        $contact['message'] = $this->message;
        Mail::to('bane@hotmail.com')->send(new ContactFormMailable($contact));        
    } 

    public function render()
    {
        return view('livewire.contact-form');
    }
}
