<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Упражнения') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-6 sm:rounded-lg">
                {{--<x-welcome />--}}
                @livewire('Exercises.exercises-form')
                @livewire('Exercises.exercises-list')
            </div>
        </div>
    </div>
</x-app-layout>