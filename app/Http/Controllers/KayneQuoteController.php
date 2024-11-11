<?php


namespace App\Http\Controllers;


use App\Services\QuoteService;

class KayneQuoteController extends Controller
{
    public function kayneQuotes()
    {
        return view('kayne-quotes.index');
    }

    public function getQuotes(QuoteService $service)
    {
        return response()->json(['data' => $service->getQuotes()]);
    }
}
