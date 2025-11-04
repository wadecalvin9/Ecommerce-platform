<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function initialize(Request $request)
    {
        $user = auth()->user();
        $amount = $request->amount; // amount in Naira or KES, etc.

        $response = Http::withToken(config('services.paystack.secret_key'))
            ->post(config('services.paystack.payment_url') . '/transaction/initialize', [
                'email' => $user->email,
                'amount' => $amount * 100, // Convert to kobo (or cents)
                'callback_url' => route('paystack.callback'),
            ]);

        $data = $response->json();

        if (isset($data['data']['authorization_url'])) {
            return redirect($data['data']['authorization_url']);
        }

        return back()->with('error', 'Payment initialization failed. Please try again.');
    }

    public function callback(Request $request)
    {
        $reference = $request->query('reference');

        $response = Http::withToken(config('services.paystack.secret_key'))
            ->get(config('services.paystack.payment_url') . "/transaction/verify/{$reference}");

        $data = $response->json();

        if ($data['data']['status'] === 'success') {
            // ✅ Handle successful payment
            // e.g. mark order as paid, save transaction ID, etc.
            return redirect()->route('home')->with('success', 'Payment successful!');
        }

        return redirect()->route('cart')->with('error', 'Payment failed or cancelled.');
    }
}
