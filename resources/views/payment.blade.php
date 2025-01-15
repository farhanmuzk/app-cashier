<x-app-layout>
    <div class="flex w-full h-full">
        <!-- Kolom Kiri -->
        <div class="w-1/4 border border-gray-300 flex flex-col">
            <header class="bg-gray-200 p-4 border-b border-gray-300">
                <h2 class="text-lg font-semibold">Order Summary</h2>
            </header>
            <div id="order-list" class="p-4 flex-1">
                <!-- Orders will be dynamically loaded here -->
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
                    <h3 id="total-price-display" class="font-semibold text-2xl">Rp 0</h3>
                </div>
                <div class="flex flex-col items-center gap-4">
                    <div class="flex gap-2 justify-center items-center w-[70%]">
                        <button id="qris-btn"
                            class="text-lg bg-tertiary py-2 px-10 m-2 text-secondary rounded-md">Qris</button>
                        <button id="tunai-btn"
                            class="text-lg bg-tertiary py-2 px-10 m-2 text-secondary rounded-md">Tunai</button>
                    </div>
                    <!-- Payment options (hidden initially) -->
                    <div id="payment-options" class="grid grid-cols-2 gap-4 w-[50%]">
                        <button class="payment-button w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Uang
                            Pas</button>
                        <button class="payment-button w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Bank
                            BCA</button>
                        <button class="payment-button w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Bank
                            BRI</button>
                        <button class="payment-button w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Bank
                            BNI</button>
                        <button
                            class="payment-button w-full text-lg bg-tertiary py-2 text-secondary rounded-md">Lainnya</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan -->
        <div class="w-1/4 border border-gray-300 flex flex-col">
            <div class="flex-1 flex flex-col justify-end">
                <!-- Total Produk Section -->
                <div id="summary-count"
                    class="bg-tertiary p-4 text-secondary font-semibold flex flex-col justify-around items-left rounded-t-lg">
                    <h3 class="text-sm">Total Produk</h3>
                </div>

                <!-- Proses Bayar Button -->
                <div class="w-full flex justify-center">
                    <a href="{{ url('/sucsess') }}"
                        class="bg-primary w-full text-white py-2 px-4 hover:bg-primary-dark text-center transition duration-300">
                        Proses Bayar
                    </a>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const orders = JSON.parse(localStorage.getItem('orders')) || [];
            const totalPrice = localStorage.getItem('totalPrice') || 0;
            const orderCount = localStorage.getItem('orderCount') || 0;

            const orderList = document.getElementById("order-list");
            const totalPriceDisplay = document.getElementById("total-price-display");
            const summaryCount = document.getElementById("summary-count");

            const qrisBtn = document.getElementById("qris-btn");
            const tunaiBtn = document.getElementById("tunai-btn");
            const paymentOptions = document.getElementById("payment-options");

            // Tambahkan event listener untuk tombol QRIS dan Tunai
            qrisBtn.addEventListener('click', () => {
                // Beri class active pada tombol yang dipilih
                qrisBtn.classList.add("active");
                tunaiBtn.classList.remove("active");

                // Tampilkan pilihan pembayaran
                paymentOptions.style.display = 'grid';
            });

            tunaiBtn.addEventListener('click', () => {
                // Beri class active pada tombol yang dipilih
                tunaiBtn.classList.add("active");
                qrisBtn.classList.remove("active");

                // Tampilkan pilihan pembayaran
                paymentOptions.style.display = 'grid';
            });

            const paymentButtons = document.querySelectorAll('.payment-button');

            paymentButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove the 'active' class from all buttons
                    paymentButtons.forEach(btn => btn.classList.remove('bg-active'));

                    // Add the 'active' class to the clicked button
                    button.classList.add('bg-active');

                    // Simpan pilihan pembayaran ke localStorage
                    localStorage.setItem('lastPaymentMethod', button.textContent);
                });
            });
            
            orders.forEach(order => {
                const orderItem = document.createElement("div");
                orderItem.className = "flex justify-between items-start";
                orderItem.innerHTML = `
            <p>${order.name}</p>
            <p>Rp. ${parseInt(order.price).toLocaleString()}</p>
        `;
                orderList.appendChild(orderItem);
            });

            totalPriceDisplay.textContent = `Rp. ${parseInt(totalPrice).toLocaleString()}`;
            summaryCount.innerHTML = `
        <h3 class="text-sm">Total ${orderCount} Produk</h3>
        <h3 class="text-lg">Rp. ${parseInt(totalPrice).toLocaleString()}</h3>
    `;
        });
    </script>
</x-app-layout>
