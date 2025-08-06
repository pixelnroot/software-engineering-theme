@props([
    'icon' => 'fa-solid fa-desktop',
    'title' => 'Feature Title',
    'description' => 'Feature description goes here.',
])

<div class="p-4 flex">
    <div class="mt-2 mr-2"><i class="{{ $icon }} text-3xl text-violet-800"></i></div>
    <div>
        <h2 class="text-xl font-semibold text-gray-700 lg:text-2xl text-left">{{ $title }}</h2>
        <p class="text-gray-500">{{ $description }}</p>
    </div>
</div>
