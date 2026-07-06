<?php

namespace App\Services\Export\Strategies;

use App\Services\Export\Contracts\ExportStrategyInterface;

class CsvExport implements ExportStrategyInterface
{
    public function export(array $data): string
    {
        //this is csv strategy 
        return "csv content";
    }
}