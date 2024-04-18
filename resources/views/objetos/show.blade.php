<x-app-layout>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    @if (session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <span class="font-medium">Error</span> {{ session()->get('error') }}
        </div>
    @endif

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <h1 class="text-center">{{ $personaje->nombre }}</h1>
        <table class="w-full text-sm text-left rtl:text-center text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase text-center bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <a HREF={{ route('personajes.index') }}>Habilidades</a>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <a HREF={{ route('personajes.index') }}>Probabilidad</a>
                    </th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($personaje->habilidades as $habilidad)
                    <tr>
                        <td>{{ $habilidad->nombre }}</td>
                        <td>{{ $habilidad->pivot->probabilidad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-center mt-4 ml-10">
        <x-primary-button><a href="{{ route('personajes.create') }}">Insertar nuevo personaje</a></x-primary-button>
    </div>

</x-app-layout>
