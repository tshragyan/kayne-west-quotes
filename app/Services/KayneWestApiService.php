<?php


namespace App\Services;


use Illuminate\Support\Facades\Http;

class KayneWestApiService
{
    const API_URL = 'https://api.kanye.rest/';

    /**
     * @param int|null $count
     * @return array
     * @throws \Illuminate\Http\Client\ConnectionException
     */
    public function getRandomQuotes(?int $count = 5): array
    {
        $quotes = [];

        for ($i = 0; $i < $count; $i ++) {
            $response = Http::retry(3)->get(self::API_URL);

            if ($response->status() == 200) {
                $quotes[] = json_decode($response->body(), true);
            }
        }

        return $quotes;
    }
}
