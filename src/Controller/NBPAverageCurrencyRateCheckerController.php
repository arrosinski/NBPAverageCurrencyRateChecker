<?php

declare(strict_types=1);

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use App\Service\NBPAverageCurrencyRateService;

class NBPAverageCurrencyRateCheckerController
{
    /**
     * method to get Average Currency Rate from Service
     * @Route("/currency/{curency}/{startDate}/{endDate}", methods={"GET","HEAD"})
     */
    public function getAverageCurrencyRateInDateRange(Request $request)
    {
        $nbpAverageCurrencyRateCheckerService = new NBPAverageCurrencyRateService(
            $request->get('currency'),
            new DateTimeImmutable($request->get('startDate')),
            new DateTimeImmutable($request->get('endDate'))
        );
        
        $nbpAverageCurrencyRateCheckerService->prepareAndCalculateDataForView();
        //return new JsonResponse('average_price : 4,1505');
    }
}
