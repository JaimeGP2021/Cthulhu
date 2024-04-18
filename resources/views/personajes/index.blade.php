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
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        <a HREF={{ route('personajes.index') }}>Nombre</a>
                    </th>
                </tr>
            </thead>
            <tbody>


                @foreach ($personajes as $personaje)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $personaje->nombre }}
                        </th>

                        <td class="px-6 py-4">
                            <a href="{{ route('personajes.edit', $personaje) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('personajes.show', $personaje) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">show</a>
                        </td>
                        <td class="px-6 py-4">
                            <form method="POST" action="{{ route('personajes.destroy', $personaje) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Borrar</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="flex justify-center mt-4 ml-10">
        <x-primary-button><a href="{{ route('personajes.create') }}">Insertar nuevo personaje</a></x-primary-button>
    </div>

</x-app-layout>
