<x-app-layout>
    <div class="flex h-full">
        <!-- Kolom Kiri -->
        <div class="w-1/2 bg-gray-200 flex flex-col justify-around items-center py-6 border-r-2 border-gray-300">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4">Es Teh Anak Bangsa</h2>
            <div class="w-1/2 p-6 bg-gray-200 flex flex-col justify-between items-center">
                <div class="flex flex-col justify-center items-center flex-grow">
                    <h1 id="current-time" class="text-6xl font-bold text-tertiary mt-2"></h1>
                    <p id="current-date" class="text-xl font-medium text-gray-600"></p>
                </div>
            </div>
            <a href="{{ url('/success-absence') }}" class="w-[50%] text-lg bg-tertiary py-2 mb-10 text-secondary rounded-md text-center">Dashboard</a>
        </div>

        <!-- Kolom Kanan -->
        <div class="w-1/2 p-6 flex flex-col justify-start">
            <h2 class="text-2xl font-semibold text-gray-700 mb-4 text-left">Pilih Karyawan</h2>
            <input type="text" id="name" name="name" value="{{ Auth::user() ? Auth::user()->name : '' }}"
                placeholder="Masukkan name"
                class="bg-gray-200 block w-full px-6 py-4 text-xl border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                readonly>
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
