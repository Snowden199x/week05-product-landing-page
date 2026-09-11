@props(['plan', 'price', 'features', 'highlighted' => false])

<div class="rounded-2xl p-8 {{ $highlighted ? 'bg-green-500 text-black shadow-2xl shadow-green-500/30 scale-105' : 'bg-gray-900 text-gray-200 border border-gray-800' }} transition duration-300">
    @if($highlighted)
        <span class="text-xs font-semibold bg-black text-green-400 px-3 py-1 rounded-full">Most Popular</span>
    @endif

    <h3 class="text-xl font-bold mt-4">{{ $plan }}</h3>
    <p class="text-3xl font-bold mt-2">{{ $price }}<span class="text-base font-normal">/mo</span></p>

    <ul class="mt-6 space-y-3 text-sm">
        @foreach($features as $feature)
            <li class="flex items-center gap-2">
                <span>✅</span> {{ $feature }}
            </li>
        @endforeach
    </ul>

    <div class="mt-8">
        <x-button variant="{{ $highlighted ? 'secondary' : 'primary' }}" class="w-full">
            Subscribe
        </x-button>
    </div>
</div>