<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    public function store(Request $request, $identifierType = null, $identifier = null)
    {
        return new Response(
            201,
            [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'X-Date' => (new Carbon())->toRfc3339String(),
            ],
            \GuzzleHttp\json_encode([
                'codeState' => 'active',
                'authorisationCode' => '12345',
            ])
        );
    }
}
