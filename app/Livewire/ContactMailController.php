<?php

namespace App\Livewire;

use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ContactMailController extends Component
{
    public $name;
    public $email;
    public $subject;
    public $content;

    public function mount()
    {
        $this->name = auth()->user()->name;
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.contact-mail');
    }

    public function enviarEmail()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required|string',
        ]);

        // Send email
        Mail::to(env('MAIL_FROM_ADDRESS', 'jhobahego23@gmail.com'))
            ->send(new ContactUsMail($this->name, $this->email, $this->subject, $this->content));

        return view('email-sent');
    }
}
