<x-app-layout>

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="w-[40em] mx-auto bg-white shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Habilidades</h2>
        <ul class="mt-2">
            @foreach ($personaje->habilidades as $habilidad)
                <li class="text-center">{{ ucfirst($habilidad->nombre) }} {{ $habilidad->pivot->probabilidad }}%</li>
            @endforeach
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white mt-4 shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Objetos</h2>
        <ul class="mt-2">
            @foreach ($personaje->objetos as $objeto)
                <li class="text-center">{{ ucfirst($objeto->nombre) }}  x{{ $objeto->pivot->cantidad }}</li>
            @endforeach
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white mt-4 shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Hechizos aprendidos</h2>
        <ul class="mt-2">
            @foreach ($personaje->hechizos as $hechizo)
                <li class="text-center">{{ $hechizo->nombre }}</li>
            @endforeach
        </ul>
    </div>

    <div class="w-[40em] mx-auto bg-white mt-4 shadow-md sm:rounded-lg">
        <h2 class="text-center text-xl font-semibold mt-4">Armas</h2>
        <ul class="mt-2">
            @foreach ($personaje->armas as $arma)
                <li class="text-center">{{ $arma->nombre }} {{$arma->pivot->probabilidad}}%</li>
            @endforeach
        </ul>
    </div>

    <div class="flex justify-center items-center mt-4">
        <x-primary-button><a href="{{ route('personajes.index') }}">Volver</a></x-primary-button>
    </div>

</x-app-layout>
