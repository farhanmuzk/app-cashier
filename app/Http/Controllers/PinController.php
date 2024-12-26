<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class PinController extends Controller
{
    public function show()
    {
        return view('auth.pin'); // Return the PIN form view
    }

    public function store(Request $request)
    {
        $request->validate([
            'pin' => 'required|digits:4', // Ensure the PIN is exactly 4 digits
        ]);

        $user = Auth::user();

        // Save the PIN (hashed for security)
        $user->pin = $request->pin;

        return redirect()->route('dashboard')->with('success', 'PIN set successfully.');
    }

    public function verify(Request $request)
{
    $request->validate([
        'pin' => 'required|digits:4',
    ]);

    $user = Auth::user();

    if ($request->pin !== $user->pin) {
        return back()->withErrors(['pin' => 'Invalid PIN']);
    }

    return redirect()->route('dashboard')->with('success', 'PIN verified successfully!');
}

}
