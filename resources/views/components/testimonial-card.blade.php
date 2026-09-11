@props(['photo', 'name', 'position', 'review'])

<div class="bg-gray-900 border border-gray-800 p-6 rounded-xl hover:border-red-500/40 transition duration-300">
    <p class="text-gray-400 text-sm italic">"{{ $review }}"</p>
    <div class="mt-5 flex items-center gap-3">
        <img src="{{ asset('images/' . $photo) }}" alt="{{ $name }}" class="w-12 h-12 rounded-full object-cover">
        <div>
            <p class="font-semibold text-white text-sm">{{ $name }}</p>
            <p class="text-gray-500 text-xs">{{ $position }}</p>
        </div>
    </div>
</div>
