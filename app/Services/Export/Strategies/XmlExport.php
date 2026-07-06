<?php

namespace App\Services\Export\Strategies;

use App\Services\Export\Contracts\ExportStrategyInterface;

class XmlExport implements ExportStrategyInterface
{
    public function export(array $data): string {
        //this is xml strategy 
        return "xml content";
    }
}