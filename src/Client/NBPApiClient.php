<?php
declare(strict_types=1);

namespace App\Client;

use Symfony\Component\HttpFoundation\JsonResponse;
use DateTimeImmutable;
use Symfony\Component\HttpKernel\HttpClientKernel;

class NBPApiClient implements ApiClientInterface
{
    public function construct()
    {
        $this->client = new HttpClientKernel();
    }
  
    public function getDataFromApi(string $currency, DateTimeImmutable $startDate, DateTimeImmutable $endDate)
    {
        return new JsonResponse('dziala jak ta lala');
    }
}
