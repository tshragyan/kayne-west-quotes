<?php

namespace App\Livewire;

use App\Services\KayneWestApiService;
use App\Services\QuoteService;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class KanyeQuotes extends Component
{
    public $quotes = [];

    public function mount()
    {
        $this->fetchQuotes();
    }

    public function fetchQuotes()
    {
        $this->quotes = array_map(function($quote) {
            return $quote['quote'];
        }, (new KayneWestApiService())->getRandomQuotes());
    }

    public function getQuotesFromDB()
    {
        $response = Http::withToken(session('token'))->get(route('api.quotes'));
        $this->quotes = json_decode($response->body(), true)['data'];
    }

    public function render()
    {
        return view('livewire.kanye-quotes');
    }
}
