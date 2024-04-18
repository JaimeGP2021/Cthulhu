<x-app-layout>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Titulo</h2>
        <ul class="mt-2">
                <li class="text-center">{{ ucfirst($libro->titulo) }}</li>
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <ul class="mt-2">
                <li class="text-red-600 text-center">Coste de cordura: {{ ucfirst($libro->coste_cordura) }} - Semanas de aprendizaje: {{ucfirst($libro->coste_tiempo)}}</li>
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Descripcion</h2>
        <ul class="mt-2">
                <li class="text-center">{{ ucfirst($libro->descripcion) }}</li>
        </ul>
    </div>



    <div class="w-[40em] mx-auto bg-white mt-4 shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Hechizos que contiene:</h2>
        <ul class="mt-2">
            @foreach ($libro->hechizos as $hechizo)
                <li class="text-center">{{ ucfirst($hechizo->nombre) }}</li>
            @endforeach
        </ul>
    </div>

    <div class="flex justify-center items-center mt-4">
        <x-primary-button><a href="{{ route('libros.index') }}">Volver</a></x-primary-button>
    </div>

</x-app-layout>
