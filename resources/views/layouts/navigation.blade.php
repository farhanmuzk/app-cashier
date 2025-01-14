<nav x-data="{ open: false }" class="bg-primary text-tertiary border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo Section -->
            <div class="flex items-center">
                @if (in_array(Route::currentRouteName(), ['dashboard', 'sale', 'absence', 'report', 'cashier']))
                    <!-- Parent Route UI -->
                    <button @click="open = !open"
                        class="p-2 rounded-md hover:text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 transition duration-150 ease-in-out">
                        <template x-if="!open">
                            <img src="{{ asset('svg/hamburger.svg') }}" alt="Hamburger Icon">
                        </template>
                        <template x-if="open">
                            <img src="{{ asset('svg/hamburger.svg') }}" alt="Absence Icon">
                        </template>
                    </button>
                @else
                    <!-- Child Route UI -->
                    <div class="flex items-center gap-4 cursor-pointer w-full" onclick="window.history.back();">
                        <img src="{{ asset('svg/chevron-left.svg') }}" alt="Chevron Icon">
                        <h3 class="text-lg font-semibold">{{ $pageTitle }}</h3> <!-- Tampilkan teks dinamis -->
                    </div>
                @endif
            </div>
            <!-- Title Section -->
            <div class="text-center">
                <a href="{{ route('dashboard') }}"class="text-xl font-semibold">The Cashier</a>
            </div>
            <div>
            </div>
        </div>
    </div>


    <!-- Responsive Navigation Menu -->
    <div x-show="open"
        class="absolute top-16 left-0  border-2 border-gray-300 rounded-md shadow-md inset-x-0 p-2 transition transform origin-top-right w-[280px] bg-gray-100 h-min-screen ">
        <div class="p-4 flex flex-col">
            {{ __('Es Teh Anak Bangsa') }}
            <a href="{{ url('/dashboard') }}" class="font-medium text-base text-gray-800 mt-2">{{ Auth::user()->name }}</a>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <x-responsive-nav-link :href="route('dashboard')">
                <div class="flex items-center gap-4 px-4">
                    <img src="{{ asset('svg/cashier.svg') }}" alt="Cashier Icon">
                    <div class="font-medium text-gray-800 text-lg my-2">Kasir</div>
                </div>
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('sale')">
                <div class="flex items-center gap-4 px-4">
                    <img src="{{ asset('svg/selling.svg') }}" alt="Selling Icon">
                    <div class="font-medium text-gray-800 text-lg my-2">Penjualan</div>
                </div>
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('report')">
                <div class="flex items-center gap-4 px-4">
                    <img src="{{ asset('svg/report.svg') }}" alt="Report Icon">
                    <div class="font-medium text-gray-800 text-lg my-2">Laporan</div>
                </div>
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('absence')">
                <div class="flex items-center gap-4 px-4">
                    <img src="{{ asset('svg/absence.svg') }}" alt="Absence Icon">
                    <div class="font-medium text-gray-800 text-lg my-2">Absensi</div>
                </div>
            </x-responsive-nav-link>
        </div>
    </div>

</nav>
