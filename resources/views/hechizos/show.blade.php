<x-app-layout>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Nombre</h2>
        <ul>
                <li class="text-center">{{ ucfirst($hechizo->nombre) }}</li>
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Categorías</h2>
        <ul>
            <li class="text-center">{{ $hechizo->categoria1->nombre}}{{ isset($hechizo->categoria2) ? ', ' . $hechizo->categoria2->nombre : '' }}</li>
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Coste</h2>
        <ul>
                <li class="text-center">{{ ucfirst($hechizo->coste) }} </li>
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Tiempo de ejecución</h2>
        <ul>
                <li class="text-center">{{ ucfirst($hechizo->turnos) }} </li>
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white mt-4 shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold pt-2">Efectos</h2>
        <ul>
            <li class="text-justify p-3">{!! nl2br(e($hechizo->efecto)) !!}</li>

        </ul>
    </div>

    <div class="flex justify-center items-center mt-4">
        <x-primary-button><a href="{{ route('hechizos.index') }}">Volver</a></x-primary-button>
    </div>

</x-app-layout>
