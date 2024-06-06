<x-layout>
    <x-slot name="titre">
        {{ __('taches.index.titre') }}
    </x-slot>
    <ul>
        @foreach ($taches as $tache)
            <li>
                <a href="{{ route('taches.show', $tache->id) }}"
                   class="underline decoration-sky-600 hover:decoration-blue-400">
                    {{ $tache->titre }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
