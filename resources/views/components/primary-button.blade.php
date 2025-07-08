<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-blue-500 py-2 rounded-lg text-white font-semibold']) }}>
    {{ $slot }}
</button>
