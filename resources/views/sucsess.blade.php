<x-app-layout>
    <div class="flex flex-col items-center justify-between p-8 h-full">
        <h2 class="text-4xl font-semibold leading-tight text-gray-800">Transaksi Berhasil</h2>
        <div class="space-y-2 mt-4 w-[50%]">
            <!-- First Row -->
            <div class="flex justify-between items-center">
                <h4 class="text-gray-600 text-lg">Total Tagihan</h4>
                <h3 class="text-lg font-semibold text-gray-800">Rp. 5.000</h3>
            </div>

            <!-- Second Row -->
            <div class="flex justify-between items-center">
                <h4 class="text-gray-600 text-lg">Tunai</h4>
                <h3 class="text-lg font-semibold text-gray-800">Rp. 5.000</h3>
            </div>
        </div>

        <!-- Button Section -->
        <div class=" w-[50%] mt-auto space-y-2">
            <div class="flex gap-4">
                <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Uang Pas</button>
                <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Rp. 5.000</button>
            </div>
            <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Uang Pas</button>
        </div>
    </div>
</x-app-layout>
