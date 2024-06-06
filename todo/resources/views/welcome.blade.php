<x-layout>
    <x-slot name="titre">
        {{ __('welcome.titre') }}
    </x-slot>
    <p class="">{{ __('welcome.salut', ['nom' => $nom]) }}</p>
</x-layout>
