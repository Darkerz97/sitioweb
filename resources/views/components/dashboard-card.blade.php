@props([
    'title',
    'description',
    'route',
])

<a href="{{ $route }}" class="bg-[#483330] hover:bg-[#9d7552] transition p-6 rounded-lg shadow-md hover:shadow-xl border border-[#b09c50]">
    <h2 class="text-2xl font-semibold text-[#ecb23a]">{{ $title }}</h2>
    <p class="text-sm text-[#ffffffcc] mt-2">{{ $description }}</p>
</a>
