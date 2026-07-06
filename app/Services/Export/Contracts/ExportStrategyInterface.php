<?php

namespace App\Services\Export\Contracts;


interface ExportStrategyInterface
{
    public function export(array $data): string;
}