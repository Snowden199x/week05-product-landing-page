@props(['icon', 'title', 'description'])

<div class="bg-gray-900 border border-gray-800 p-6 rounded-xl hover:border-green-500/50 hover:shadow-lg hover:shadow-green-500/10 transition duration-300 hover:-translate-y-1">
    <div class="text-3xl mb-4">{{ $icon }}</div>
    <h3 class="font-semibold text-lg text-white">{{ $title }}</h3>
    <p class="mt-2 text-gray-400 text-sm">{{ $description }}</p>
</div>