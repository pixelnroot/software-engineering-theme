@props([
'icon' => 'fa-solid fa-desktop',
'title' => 'Feature Title',
'description' => 'Feature description goes here.',
])

<div class="mx-2 p-4 flex rounded-lg shadow-sm hover:translate-y-1 transition-transform duration-200 ease-in-out pr-6">
    <div class="mt-2 mr-2"><i class="{{ $icon }} text-3xl text-violet-800"></i></div>
    <div>
        <h2 class="text-xl font-semibold text-gray-700 lg:text-2xl text-left">{{ $title }}</h2>
        <p class="text-gray-500">{{ $description }}</p>
    </div>
</div>