<?php

declare(strict_types=1);

namespace App\Client;

use DateTimeImmutable;

interface ApiClientInterface
{
    public function getDataFromApi(string $currency, DateTimeImmutable $startDate, DateTimeImmutable $endDate);
}