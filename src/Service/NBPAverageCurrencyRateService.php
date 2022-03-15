<?php

declare(strict_types=1);

namespace App\Service;

use App\Client\NBPApiClient;
use DateTimeImmutable;
use Exception;

class NBPAverageCurrencyRateService
{
    const SUPPORTED_CURRENCIES = ['USD', 'EUR', 'CHF', 'GBP' ];

    public function __construct(string $currency, DateTimeImmutable $startDate, DateTimeImmutable $endDate)
    {
        if (!in_array($currency, self::SUPPORTED_CURRENCIES)) {
            $message = 'Unsupported Currency value provided, we only support EUR,GBP,USD,CHF';
            throw new Exception($message, 416);
        }
        $this->currency = $currency;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function prepareAndCalculateDataForView()
    {
        $client = new NBPApiClient();
        return $client->getDataFromApi($this->currency, $this->startDate, $this->endDate);
    }
}
