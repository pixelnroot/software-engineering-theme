@props([
    'icon' => 'fa-solid fa-desktop',
    'title' => 'Feature Title',
    'description' => 'Feature description goes here.',
])

<div class="p-4 flex">
    <div class="mt-2 mr-4"><i class="{{ $icon }} text-4xl text-violet-800"></i></div>
    <div>
        <h2 class="text-2xl font-semibold text-gray-700">{{ $title }}</h2>
        <p class="text-gray-500">{{ $description }}</p>
    </div>
</div>
