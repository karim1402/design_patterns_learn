<?php 
namespace App\Services\Export;
use App\Services\Export\Contracts\ExportStrategyInterface;
use App\Services\Export\Strategies\CsvExport;
use App\Services\Export\Strategies\JsonExport;
use App\Services\Export\Strategies\XmlExport;

class ExportFactory
{
    public static function makeExportStrategy(string $format): ExportStrategyInterface
    {
       return match ($format) {
            'csv'  => new CsvExport(),
            'json' => new JsonExport(),
            'xml'  => new XmlExport(),
            default => throw new \InvalidArgumentException("Unsupported format: {$format}"),
        };
    }
}