<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Login extends Component
{
    public string $password = '';
    public ?string $message = null;

    public function auth()
    {
        $body = json_encode(['password' => $this->password]);
        $response = Http::withBody($body)->post(route('auth'));

        if ($response->status() !== 200) {
            $this->message = json_decode($response->body(), true)['message'];
        } else {
            session(['token' => json_decode($response->body(), true)['message']]);
            $this->redirect(route('home'));
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
