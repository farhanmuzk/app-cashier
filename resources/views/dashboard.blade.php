<x-app-layout>

    <div class="py-6 px-4 overflow-hidden shadow-sm sm:rounded-lg h-full">
        <div class="grid grid-cols-10 gap-4 text-gray-900 h-full">
            <!-- Kolom 1 (70%) -->
            <div class="col-span-7">
                <div class="">
                    <!-- Input search -->
                    <x-text-input type="search" placeholder="Search here..." class="pl-10" />
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-6 overflow-y-auto max-h-[440px]">
                    <!-- Card 1 -->
                    <div class="bg-white rounded-lg shadow-md p-4 h-[150px] flex flex-col justify-center text-tertiary item-card" data-name="Espresso with Milk" data-price="20000">
                        <p class="font-bold mb-2 text-sm">Minuman</p>
                        <h3 class="text-xl font-semibold mb-2">Espresso with Milk</h3>
                        <p class="text-lg">Rp. 20.000</p>
                    </div>
                </div>
            </div>

            <!-- Kolom 2 (30%) -->
            <div class="col-span-3 bg-secondary rounded-lg shadow-md sticky top-0 flex flex-col order-summary">
                <h2 class="text-xl font-semibold text-center border-b border-gray-500 py-4">Jenis Order</h2>
                <h4 class="text-lg p-2">Jumlah Pesanan : <span class="order-count">0</span> Produk</h4>
                <div class="order-items flex flex-col gap-4 p-6 rounded-lg">
                    <!-- Items will be added dynamically here -->
                </div>
                <div class="mt-auto">
                    <div class="flex justify-around items-center">
                        <button class="w-full text-lg bg-tertiary py-2 m-2 text-secondary rounded-md">Cetak</button>
                        <a href="{{ url('/payment') }}" class="w-full text-lg bg-tertiary py-2 m-2 text-secondary rounded-md text-center">Simpan</a>
                    </div>
                    <div class="bg-primary p-2 flex justify-around items-center rounded-b-lg">
                        <h3 class=" text-lg">Bayar</h3>
                        <h3 class="text-lg total-price">Rp. 0</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const itemCards = document.querySelectorAll(".item-card");
            const orderCountElem = document.querySelector(".order-count");
            const orderItemsContainer = document.querySelector(".order-items");
            const totalPriceElem = document.querySelector(".total-price");

            let orderCount = 0;
            let totalPrice = 0;

            itemCards.forEach(card => {
                card.addEventListener("click", () => {
                    const itemName = card.getAttribute("data-name");
                    const itemPrice = parseInt(card.getAttribute("data-price"));

                    // Update order count
                    orderCount += 1;
                    orderCountElem.textContent = orderCount;

                    // Update total price
                    totalPrice += itemPrice;
                    totalPriceElem.textContent = `Rp. ${totalPrice.toLocaleString()}`;

                    // Add item to the order summary
                    const orderItem = document.createElement("div");
                    orderItem.className = "flex justify-between items-center border-b pb-2";
                    orderItem.innerHTML = `
                        <h3 class="text-lg font-medium text-gray-800">${itemName}</h3>
                        <div class="flex items-center gap-4">
                            <span class="text-lg font-semibold text-gray-600">Rp. ${itemPrice.toLocaleString()}</span>
                            <button class="p-2 bg-red-500 text-white rounded-md hover:bg-red-600 delete-item">
                                
                            </button>
                        </div>
                    `;

                    orderItemsContainer.appendChild(orderItem);

                    // Add delete functionality
                    const deleteButton = orderItem.querySelector(".delete-item");
                    deleteButton.addEventListener("click", () => {
                        // Update order count
                        orderCount -= 1;
                        orderCountElem.textContent = orderCount;

                        // Update total price
                        totalPrice -= itemPrice;
                        totalPriceElem.textContent = `Rp. ${totalPrice.toLocaleString()}`;

                        // Remove item from the order summary
                        orderItem.remove();
                    });
                });
            });
        });
    </script>

</x-app-layout>
