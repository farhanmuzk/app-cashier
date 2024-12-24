<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            // Definisikan judul halaman berdasarkan route yang sedang aktif
            $pageTitle = '';
            $routeName = Route::currentRouteName();

            $titles = [
                'pages.payment' => 'Halaman Payment',
                'sucsess-payment' => 'Halaman Sukses Payment',
                'pages.info' => 'Halaman Info',
                'summary' => 'Halaman Ringkasan Penjualan',
                'commission' => 'Halaman Komisi',
                'report-cashier' => 'Halaman Cashier',
                'recap' => 'Halaman Kas Kasir',
                'sucsess-absence' => 'Halaman Absensi',
                'out-cashier' => 'Halaman Kasir Keluar',
            ];

            if (array_key_exists($routeName, $titles)) {
                $pageTitle = $titles[$routeName];
            }

            // Membagikan variabel ke semua view
            $view->with('pageTitle', $pageTitle);
        });
    }

}
