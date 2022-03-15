<?php
namespace App\Controller;

use DateTimeImmutable;
use Symfony\Component\HttpFoundation\JsonResponse;

class NBPAverageCurrencyRateCheckerController
{
    /**
     * method to get Average Currency Rate from Service
     * @Route("/currency/{curency}/{fromDate}/{toDate}", methods={"GET","HEAD"}) 
     */
    public function getAverageCurrencyRateInDateRange():JsonResponse
    {
        return new JsonResponse('Average Price : 4,1212112');
    }
}