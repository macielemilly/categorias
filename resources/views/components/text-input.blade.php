@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-red-700 dark:focus:border-red-700 focus:ring-red-700 dark:focus:ring-red-700 rounded-md shadow-sm']) }}>
