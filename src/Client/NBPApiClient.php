<?php
declare(strict_types=1);

namespace App\Client;

use Symfony\Component\HttpFoundation\JsonResponse;
use DateTimeImmutable;
use Symfony\Component\HttpClient\HttpClient;

class NBPApiClient implements ApiClientInterface
{
    CONST NBP_API_URL = 'http://api.nbp.pl/api/exchangerates/rates/';

    
    public function getDataFromApi(string $currency, DateTimeImmutable $startDate, DateTimeImmutable $endDate)
    {
             $response = (new HttpClient())->create()->request(
            'GET',
            self::NBP_API_URL. 'A/'.$currency. '/' .$startDate->format('Y-m-d').'/' .$endDate->format('Y-m-d'). '/'
        );
        dump($response->getContent());
        die();
    }
}
