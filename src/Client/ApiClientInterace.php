<?php

declare(strict_types=1);

namespace App\Client;

use DateTimeImmutable;

interface ApiClientInterface
{
    public function getDataFromApi($currency, $startDate, $endDate);
}