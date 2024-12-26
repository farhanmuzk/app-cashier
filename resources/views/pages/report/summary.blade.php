<x-app-layout>
    <div class="grid grid-cols-1 h-full grid-rows-[70px,auto,auto,auto]">
        <div class="p-4 border border-tertiary">
            <p id="current-time" class="text-xl font-medium text-gray-600"></p>
        </div>
        <div class="p-4 border border-tertiary flex flex-col gap-4 justify-center">
            <h1 class="text-2xl font-bold">Total Penjualan</h1>
            <p class="text-xl font-medium text-gray-600">Rp. 15.000</p>
        </div>
        <div class="p-4 flex gap-10 justify-start my-auto">
            <div>
                <h1 class="text-2xl font-bold">Total Transaksi</h1>
                <p class="text-xl font-medium text-gray-600">5</p>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Total Produk</h1>
                <p class="text-xl font-medium text-gray-600">5</p>
            </div>
        </div>
        <div class="p-4 border border-tertiary flex flex-col gap-4 justify-center">
            <h1 class="text-2xl font-bold">Refund</h1>
            <p class="text-xl font-medium text-gray-600">Rp. 0</p>
        </div>
    </div>
    <script>
        // Mengambil waktu saat ini dalam format yang lebih sederhana
        function updateTime() {
            const now = new Date();
            const formattedTime = now.toLocaleString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
                hour: '2-digit',
                minute: '2-digit'
            });
            document.getElementById('current-time').textContent = formattedTime;
        }

        // Update waktu setiap detik
        setInterval(updateTime, 1000);
        updateTime(); // Untuk menampilkan waktu pertama kali saat halaman dimuat
    </script>
</x-app-layout>
