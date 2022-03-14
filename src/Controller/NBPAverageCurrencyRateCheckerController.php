<?php
namespace App\Controller;

use DateTimeImmutable;
use Symfony\Component\HttpFoundation\JsonResponse;

class NBPAverageCurrencyRateCheckerController
{
    /**
     * method to get Average Currency Rate from Service
     */
    public function getAverageCurrencyRateInDateRange(string $currency, DateTimeImmutable $fromDate, DateTimeImmutable $toDate)
    {
        
    }
}
