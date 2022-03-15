<?php 
declare(strict_types=1);

Interface ApiClientInterface {
    public function getDataFromApi(string $currency, DateTimeImmutable $startDate, DateTimeImmutable $endDate);
}