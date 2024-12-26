<x-app-layout>
    <div class="flex justify-center items-center h-screen bg-gray-100">
        <div class="w-full max-w-lg p-6 bg-white rounded-lg shadow-lg flex flex-col items-center gap-8">
            <div class="w-full flex items-center justify-between">
                <h3 class="text-2xl font-semibold text-tertiary">Absen Masuk</h3>
                <h3 class="text-2xl font-semibold text-primary">Berhasil</h3>
            </div>
            <x-solar-check-circle-bold :class="($class ?? '') . ' w-24 h-24 text-primary'"/>
            <div>
                <div class="flex flex-col justify-center items-center flex-grow gap-4">
                    <p class="text-gray-600">Anda berhasil masuk pukul</p>
                    <h1 id="current-time" class="text-6xl font-bold text-tertiary mt-2"></h1>
                    <p id="current-date" class="text-xl font-medium text-gray-600"></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Mengambil waktu saat ini dalam format yang lebih sederhana
        function updateTime() {
            const now = new Date();
            const formattedDate = now.toLocaleString('id-ID', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric',
            });
            const formattedTime = now.toLocaleString('id-ID', {
                hour: '2-digit',
                minute: '2-digit'
            });

            // Menampilkan tanggal dan waktu
            document.getElementById('current-date').textContent = formattedDate;
            document.getElementById('current-time').textContent = `${formattedTime}`;
        }

        // Update waktu setiap detik
        setInterval(updateTime, 1000);
        updateTime(); // Untuk menampilkan waktu pertama kali saat halaman dimuat
    </script>
</x-app-layout>
