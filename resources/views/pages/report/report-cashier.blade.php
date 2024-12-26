<x-app-layout>
    <div class="p-4 ">
        <p id="current-time" class="text-xl font-medium text-gray-600"></p>
        <h2 class="text-2xl font-semibold text-gray-800 mt-4">{{ Auth::user()->name }}</h2>
        <div class="flex justify-between gap-4 w-[50%] my-6">
            <div class="flex flex-col gap-4">
                <div>
                    <h1 class="text-2xl font-bold">Buka Kasir</h1>
                    <p class="text-xl font-medium text-gray-600">08:45</p>
                </div>
                <div>
                    <h1 class="text-2xl font-bold">Saldo Awal</h1>
                    <p class="text-xl font-medium text-gray-600">100.000</p>
                </div>
            </div>
            <div class="flex flex-col gap-4">
                <div>
                    <h1 class="text-2xl font-bold">Tutup Kasir</h1>
                    <p class="text-xl font-medium text-gray-600">-- --</p>

                </div>
                <div>
                    <h1 class="text-2xl font-bold">Saldo Akhir</h1>
                    <p class="text-xl font-medium text-gray-600">190.000</p>
                </div>
            </div>
        </div>
        <a href="{{ url('/out-cashierd') }}" class="w-full text-xl bg-tertiary py-2 px-10  text-secondary rounded-md">Tutup Kasir</a>
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
