<?php

namespace App\Services\Export\Strategies;

use App\Services\Export\Contracts\ExportStrategyInterface;

class JsonExport implements ExportStrategyInterface
{
    public function export(array $data): string
    {
        //this is json strategy 
        return "json content";
    }
}