<x-guest-layout>

    <form method="POST" action="{{ route('auth.pin.verify') }}"
        class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
        @csrf

        <!-- Title -->
        <h2 class="text-xl font-semibold text-gray-700 mb-4 text-center">
            {{ __('Enter Your PIN') }}
        </h2>

        <!-- PIN Input -->
        <div class="mb-4">
            <x-input-label for="pin" :value="__('PIN')" class="text-sm font-medium text-gray-600" />
            <x-text-input id="pin"
                class="block mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                type="password" name="pin" maxlength="4" required autocomplete="off" />
            <!-- Error Message -->
            @if ($errors->has('pin'))
                <span class="text-red-500 text-sm mt-2">
                    {{ $errors->first('pin') }}
                </span>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <x-primary-button
                class="w-full py-2 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md">
                {{ __('Verify PIN') }}
            </x-primary-button>
        </div>
    </form>

</x-guest-layout>
