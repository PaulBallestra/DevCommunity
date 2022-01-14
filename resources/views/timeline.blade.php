<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Timeline') }}
        </h2>
    </x-slot>

    @livewire('create-post')

    <!-- AUTRES POST AFFICHÉS -->
    @livewire('posts')

</x-app-layout>
