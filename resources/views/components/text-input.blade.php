@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-secondary mt-1 block w-full px-4 py-2 text-lg border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) }}>
