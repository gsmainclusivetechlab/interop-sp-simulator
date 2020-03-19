<?php

namespace App\Http\Controllers;

use App\Preconditions\Factory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Http;

class TransactionController extends Controller
{
    public function generate(Request $request, ?string $testCase = null)
    {
        $precondition = Factory::instance($testCase);

        if (!$precondition) {
            return response()->json([
                'success' => false,
                'message' => 'No such test case!',
            ]);
        }

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'traceparent' => '00-' . bin2hex(random_bytes(16)),
            'X-Date' => (new Carbon())->toRfc7231String(),
            'X-Callback-URL' => config('app.url') . '/callback',
            'Accept' => 'application/json',
        ])
            ->post(Env::get('HOST_MMO1') . '/transactions', $precondition->getData());

        return $response->json();
    }
}
