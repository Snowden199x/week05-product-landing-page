@props(['variant' => 'primary'])

@php
$classes = match($variant) {
    'primary' => 'bg-green-500 text-black hover:bg-green-400 shadow-md hover:shadow-green-500/50 font-semibold',
    'outline' => 'border border-green-500 text-green-400 hover:bg-green-500/10',
    'secondary' => 'bg-black text-red-500 border border-red-500 hover:bg-red-500/10',
};
@endphp

<button {{ $attributes->merge(['class' => "px-5 py-2.5 rounded-lg font-medium transition duration-200 $classes"]) }}>
    {{ $slot }}
</button>