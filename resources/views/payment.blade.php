<x-app-layout>
    <div class="flex w-full h-full">
        <!-- Kolom Kiri -->
        <div class="w-1/4 border border-gray-300 flex flex-col">
            <header class="bg-gray-200 p-4 border-b border-gray-300">
                <h2 class="text-lg font-semibold">#noname-15437</h2>
            </header>
            <div class="p-4 flex-1 flex justify-between items-start">
                <p>1 Lychee Tea</p>
                <p>Rp 5.000</p>
            </div>
        </div>

        <!-- Kolom Tengah -->
        <div class="w-1/2 border border-gray-300 flex flex-col">
            <header class="bg-gray-200 p-4 border-b border-gray-300">
                <h2 class="text-lg text-center font-semibold">Pembayaran</h2>
            </header>
            <div class="p-4 flex-1 flex flex-col justify-center">
                <div class="text-center flex gap-4 flex-col mb-2">
                    <p>Total Tagihan</p>
                    <h3 class="font-semibold text-2xl">Rp 5.000</h3>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="flex gap-2 justify-center items-center w-[70%]">
                        <button class="text-lg bg-tertiary py-2 px-10 m-2 text-secondary rounded-md">Qris</button>
                        <button class="text-lg bg-tertiary py-2 px-10 m-2 text-secondary rounded-md">Tunai</button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 w-[50%]">
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Uang Pas</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Rp. 5.000</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Rp. 1.000</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Rp. 10.000</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Bank BCA</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Bank BRI</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Bank BNI</button>
                        <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Lainnya</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="w-1/4 border border-gray-300 flex flex-col">
            <div class="flex-1 flex flex-col justify-between">
                <div class="flex-1">
                    <!-- Konten lain di sini jika ada -->
                </div>
                <div>
                    <div
                        class="bg-tertiary p-4 text-secondary font-semibold flex flex-col justify-around items-left rounded-t-lg">
                        <h3 class="text-sm">Total <span>1</span> Produk</h3>
                        <h3 class="text-lg">Rp. 6.000</h3>
                    </div>
                    <div class="container w-full flex justify-center">
                        <a
                            href="{{ url('/sucsess' ) }}"
                            class="bg-primary w-full text-white py-2 px-4 hover:bg-primary-dark text-center transition duration-300">
                            Proses Bayar
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
