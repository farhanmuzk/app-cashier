<x-app-layout>
    <div class="grid grid-rows-4 gap-4 p-4">
        <a href="{{ route('summary') }}" class="block">
            <div class="p-6 cursor-pointer rounded shadow-md hover:bg-blue-50 hover:shadow-sm transition-all duration-300">
                <h2 class="text-2xl font-semibold text-gray-800">Ringkasan Penjualan</h2>
            </div>
        </a>
        <a href="{{ route('commission') }}" class="block">
            <div class="p-6 cursor-pointer rounded shadow-md hover:bg-blue-50 hover:shadow-sm transition-all duration-300">
                <h2 class="text-2xl font-semibold text-gray-800">Komisi</h2>
            </div>
        </a>
        <a href="{{ route('report-cashier') }}" class="block">
            <div class="p-6 cursor-pointer rounded shadow-md hover:bg-blue-50 hover:shadow-sm transition-all duration-300">
                <h2 class="text-2xl font-semibold text-gray-800">Kasir</h2>
            </div>
        </a>
        <a href="{{ route('recap') }}" class="block">
            <div class="p-6 cursor-pointer rounded shadow-md hover:bg-blue-50 hover:shadow-sm transition-all duration-300">
                <h2 class="text-2xl font-semibold text-gray-800">Kas Kasir</h2>
            </div>
        </a>
    </div>
</x-app-layout>
