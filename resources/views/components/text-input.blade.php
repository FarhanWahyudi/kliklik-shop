@props([
    'disabled' => false,
    'placeholder' => '',
])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'focus:ring-0 border-none bg-gray-100 rounded-lg py-3', 'placeholder' => $placeholder]) }}>
