<?php


namespace App\Services;


use App\Models\Quote;

class QuoteService
{
    /**
     * @return array
     */
    public function getQuotes(): array
    {
       return Quote::query()->orderByDesc('id')->limit(5)->pluck('quote', 'id')->toArray();
    }
}
