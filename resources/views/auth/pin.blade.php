<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body class="h-screen bg-secondary">
    <div class="w-full bg-primary text-center p-4 text-2xl font-semibold text-tertiary border-b-4 border-tertiary">
        The Cashier
    </div>

    <div class="w-full flex flex-col md:flex-row h-full">
        <div class="w-full h-full">
            <h1 class="text-6xl h-[80px] font-semibold text-black p-4 text-center mb-4">Selamat datang di The Cashier</h1>
            <img src="{{ asset('images/cashier.jpg') }}" alt="Cashier Image" class="w-full object-cover">
        </div>

        <div class="w-full md:w-[40%] bg-gray-100">
            <div class="bg-primary h-[80px] flex items-center justify-center md:mb-2">
                <h2 class="text-center text-2xl md:text-4xl font-semibold text-black">Masuk Kasir</h2>
            </div>

            {{-- <div class="mb-4">
                <input type="text" id="name" name="name" value="{{ Auth::user() ? Auth::user()->name : '' }}"
                    placeholder="Masukkan name"
                    class="bg-gray-200 block w-full px-6 py-4 text-xl border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" readonly>
            </div> --}}

            <form method="POST" action="{{ route('auth.pin.verify') }}" class="max-w-md mx-auto p-6">
                @csrf
                <h2 class="text-xl font-semibold text-gray-700 text-center">{{ __('Enter Your PIN') }}</h2>

                <div class="">
                    <div id="preview" class="text-black text-center p-4 text-4xl mb-6 rounded h-[40px]"></div>
                    <input type="hidden" id="pin" name="pin">
                    @if ($errors->has('pin'))
                        <span class="text-red-500 text-sm mt-2 text-center block">{{ $errors->first('pin') }}</span>
                    @endif
                </div>

                <div class="grid grid-cols-3 gap-4 p-4">
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('1')">1</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('2')">2</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('3')">3</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('4')">4</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('5')">5</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('6')">6</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('7')">7</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('8')">8</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('9')">9</button>
                    <!-- Empty Space -->
                    <div></div>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="updatePreview('0')">0</button>
                    <button type="button" class="bg-gray-200 hover:bg-gray-300 text-xl font-semibold py-4 rounded-md"
                        onclick="clearPreview()">C</button>
                </div>

                <div class="mt-4">
                    <button id="okButton" class="hidden bg-gray-200 hover:bg-gray-300 text-gray-600 text-xl font-semibold p-4 rounded-md w-full">OK</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        let pinValue = '';

        function updatePreview(num) {
            if (pinValue.length < 4) {
                pinValue += num;
                document.getElementById('preview').textContent = '*'.repeat(pinValue.length);
                document.getElementById('pin').value = pinValue;

                const okButton = document.getElementById('okButton');
                const isComplete = pinValue.length === 4;

                if (isComplete) {
                    okButton.style.display = 'block';
                    okButton.classList.remove('hidden');
                } else {
                    okButton.style.display = 'none';
                    okButton.classList.add('hidden');
                }
            }
        }

        function clearPreview() {
            pinValue = '';
            document.getElementById('preview').textContent = '';
            document.getElementById('pin').value = '';
            const okButton = document.getElementById('okButton');
            okButton.style.display = 'none';
            okButton.classList.add('hidden');
        }
    </script>
</body>

</html>
