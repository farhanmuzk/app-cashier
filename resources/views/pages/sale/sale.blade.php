<x-app-layout>
    <div class="overflow-hidden shadow-lg rounded-lg h-full bg-white">
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="w-full text-sm text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                    <tr>
                        <th scope="col" class="py-3 px-4 text-center">Jenis</th>
                        <th scope="col" class="py-3 px-6 text-center">Nama</th>
                        <th scope="col" class="py-3 px-6 text-center">No Transaksi</th>
                        <th scope="col" class="py-3 px-6 text-center">Waktu</th>
                        <th scope="col" class="py-3 px-6 text-center">Pembayaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td class="py-6 px-4 flex justify-center items-center gap-3 text-gray-700">
                            <img src="{{ asset('svg/cashier.svg') }}" alt="icon" class="w-6 h-6">
                            <span>Lainnya</span>
                        </td>
                        <td class="py-4 px-6 text-gray-600 text-center">Tanpa Pelanggan</td>
                        <td class="py-4 px-6 text-gray-600 text-center">CS/01/241123/005</td>
                        <td class="py-4 px-6 text-gray-600 text-center">23 Nov 2024, 8:25</td>
                        <td class="py-4 px-6 text-gray-600 text-center">
                            <div class="flex flex-col items-center">
                                <h4 class="text-gray-800 font-semibold">Rp.20.000</h4>
                                <h4 class="text-gray-500 text-sm">Qris BCA</h4>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
