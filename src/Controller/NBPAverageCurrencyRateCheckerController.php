<?php
namespace App\Controller;

use DateTimeImmutable;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class NBPAverageCurrencyRateCheckerController
{
    /**
     * method to get Average Currency Rate from Service
     * @Route("/currency/{curency}/{fromDate}/{toDate}", methods={"GET","HEAD"}) 
     */
    public function getAverageCurrencyRateInDateRange(Request $request):JsonResponse
    {
        dump($request->get('currency'));
        dump($request->get('fromDate'));
        dump($request->get('toDate'));
        die();
        //return new JsonResponse('Average Price : 4,1212112');
    }
}