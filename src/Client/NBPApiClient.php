<?php
declare(strict_types=1);

namespace App\Client;

use Symfony\Component\HttpFoundation\JsonResponse;
use DateTimeImmutable;
use Symfony\Component\HttpClient\HttpClient;
use DateInterval;

class NBPApiClient implements ApiClientInterface
{
    const NBP_API_URL = 'http://api.nbp.pl/api/exchangerates/rates/';

    
    public function getDataFromApi(string $currency, DateTimeImmutable $startDate, DateTimeImmutable $endDate)
    {
        $startDateFixed = ($startDate->sub(new DateInterval("P1D")))->format('Y-m-d');
        $response = (new HttpClient())->create()->request(
            'GET',
            self::NBP_API_URL. 'C/'.$currency. '/' .$startDateFixed .'/' .$endDate->format('Y-m-d'). '/'
        );
         return $this->calculateAveragePrice($response->toArray());
    }

    private function calculateAveragePrice($bids)
    {
        $bidsSummed = 0;
        foreach ($bids['rates'] as $bid) {
            $bidsSummed += $bid['bid'];
        }

        $averageBidValue = $bidsSummed/count($bids['rates']);
        return round($averageBidValue, 4);
    }
}
