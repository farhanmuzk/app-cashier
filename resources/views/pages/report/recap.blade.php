<x-app-layout>
    <div class="p-4 ">
        <p id="current-time" class="text-xl font-medium text-gray-600"></p>
        <div class="flex justify-between gap-4 w-[50%] mt-6">
            <div class="flex flex-col gap-4">
                <div>
                    <h1 class="text-2xl font-bold">Pemasukan Kas Kasir</h1>
                    <p class="text-xl font-medium text-gray-600">Rp. 0</p>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">Pemasukan Kas Kasir</h1>
                    <p class="text-xl font-medium text-gray-600">Rp. 100.000</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div>
                    <h1 class="text-2xl font-bold">Pengeluaran Kas Kasir</h1>
                    <p class="text-xl font-medium text-gray-600">Rp. 0</p>

                </div>
                <div>
                    <h1 class="text-2xl font-bold">Total Penjualan</h1>
                    <p class="text-xl font-medium text-gray-600">Rp. 1.500.000</p>
                </div>
            </div>
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
