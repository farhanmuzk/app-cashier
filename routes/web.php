<?php

use App\Http\Controllers\PinController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Route Parent
    Route::get('/dashboard', function () {
        $menuItems = [
            [
                'name' => 'Blackcurrant',
                'price' => 8000,
                'category' => 'Minuman',
            ],
            [
                'name' => 'Milk tea',
                'price' => 6000,
                'category' => 'Minuman',
            ],
            [
                'name' => 'Yakult tea',
                'price' => 10000,
                'category' => 'Minuman',
            ],
            [
                'name' => 'Lemon tea',
                'price' => 8000,
                'category' => 'Minuman',
            ],
        ];

        return view('dashboard', [
            'menuItems' => $menuItems,
        ]);
    })->name('dashboard');

    Route::get('/out-cashier', function () {
        return view('pages.report.out-cashier');
    })->name('out-cashier');

    Route::get('/sales', function () {
        return view('pages.sale.sale');
    })->name('sale');

    Route::get('/absence', function () {
        return view('pages.absence.absence');
    })->name('absence');

    Route::get('/report', function () {
        return view('pages.report.report');
    })->name('report');

    Route::get('/payment', function () {
        $orders = session('orders', []);
        // print orders
        // dd($orders);

        $totalPrice = collect($orders)->sum('price');

        return view('payment', [
            'orders' => $orders,
            'totalPrice' => $totalPrice,
        ]);
    })->name('pages.payment');

    Route::get('/success-absence', function () {
        return view('pages.absence.sucsess-absence');
    })->name('sucsess-absence');

    Route::get('/sucsess', function () {
        return view('sucsess');
    })->name('sucsess-payment');

    Route::get('/summary', function () {
        return view('pages.report.summary');
    })->name('summary');

    Route::get('/commission', function () {
        return view('pages.report.commission');
    })->name('commission');

    Route::get('/report-cashier', function () {
        return view('pages.report.report-cashier');
    })->name('report-cashier');

    Route::get('/recap', function () {
        return view('pages.report.recap');
    })->name('recap');

    Route::post('/save-order', function (Request $request) {
        //  Decode JSON values from selected orders
        $orders = collect($request->input('orders', []))->map(function ($order) {
            return json_decode($order, true);
        });

        // Calculate total price
        $total = $orders->sum('price');

        // Save to session
        session(['orders' => $orders, 'total' => $total]);

        // Redirect to payment page
        return redirect()->route('pages.payment');
    })->name('save-order');
});



Route::get('/pin', function () {
    return view('pin');
})->middleware('auth'); // Ensure the user is logged in

Route::get('/pin', [PinController::class, 'show'])->name('auth.pin.form');
Route::post('/pin', [PinController::class, 'store'])->name('auth.pin');
Route::post('/pin/verify', [PinController::class, 'verify'])->name('auth.pin.verify');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
