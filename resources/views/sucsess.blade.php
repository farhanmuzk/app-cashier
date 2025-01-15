<x-app-layout>
    <div class="flex flex-col items-center justify-between p-8 h-full">
        <h2 class="text-4xl font-semibold leading-tight text-gray-800">Transaksi Berhasil</h2>
        <div id="transaction-summary" class="space-y-2 mt-4 w-[50%]">
            <!-- Transaction details will be dynamically populated here -->
        </div>

        <!-- Button Section -->
        <div class="w-[50%] mt-auto space-y-2">
            <div class="flex gap-4">
                <button id="exact-cash" class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Uang Pas</button>
                <button id="custom-amount" class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Rp. 5.000</button>
            </div>
            <button class="w-full text-lg bg-tertiary py-2 text-secondary rounded-md" onclick="resetLocalStorage()">Selesai</button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const transactionSummary = document.getElementById("transaction-summary");
            const customAmountButton = document.getElementById("custom-amount");

            // Fetch details from localStorage
            const totalPrice = localStorage.getItem('totalPrice') || 0;

            // Dynamically populate transaction summary
            transactionSummary.innerHTML = `
                <div class="flex justify-between items-center">
                    <h4 class="text-gray-600 text-lg">Total Tagihan</h4>
                    <h3 class="text-lg font-semibold text-gray-800">Rp. ${parseInt(totalPrice).toLocaleString()}</h3>
                </div>
                <div class="flex justify-between items-center">
                    <h4 class="text-gray-600 text-lg">Tunai</h4>
                    <h3 class="text-lg font-semibold text-gray-800">Rp. ${parseInt(totalPrice).toLocaleString()}</h3>
                </div>
            `;

            // Add event listener to custom amount button
            customAmountButton.innerHTML = `${parseInt(totalPrice).toLocaleString()}`;
        });

        // Clear localStorage on reset
        function resetLocalStorage() {
            localStorage.clear();
            window.location.href = "{{ url('/dashboard') }}"; // Redirect to the dashboard
        }
    </script>
</x-app-layout>
