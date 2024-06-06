<x-layout>
    <x-slot name="titre">
        {{ __('taches.show.titre', ['tache' => $tache->id]) }}
    </x-slot>
    <p>{{ $tache->titre }}</p>
</x-layout>


