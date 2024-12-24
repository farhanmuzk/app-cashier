<x-app-layout>
    <div class="p-4 border border-tertiary h-full">
        <p id="current-time" class="text-xl font-medium text-gray-600"></p>
        <div class="flex flex-col gap-4 justify-center items-center h-full">
            <x-fluentui-document-split-hint-off-16-o  :class="($class ?? '') . ' w-44 h-44 '"/>
            <h1 class="text-2xl font-semibold">Belum ada laporan</h1>
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
