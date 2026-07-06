<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Services\Export\ExportFactory;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportUser(Request $request)
    {
        $request->validate([
            'format' => 'required|in:csv,json,xml',
            'data' => 'required|array',
        ]);
        $strategy = ExportFactory::makeExportStrategy($request['format']);

        return response()->json([
            'format' => $request['format'],
            'data' => $strategy->export($request['data']),
        ]);  
        
    }
}
