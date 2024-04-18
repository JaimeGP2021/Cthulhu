<x-app-layout>
    <form method="POST" action="{{route('hechizos.update',$hechizo)}}" class="flex items-center justify-center h-screen">
        @method('PUT')
        @csrf
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col">
                <label for="nombre">Nombre</label>
                <input value="{{$hechizo->nombre}}" type="text" name="nombre" id="nombre" required />
            </div>

            <div class="flex flex-col">
                <label for="tipo1">Tipo 1</label>
                <input value="{{$hechizo->tipo1}}" type="text" name="tipo1" id="tipo1" required />
            </div>


            <div class="flex flex-col">
                <label for="tipo2">Tipo 2</label>
                <input value="{{$hechizo->tipo2}}" type="text" name="tipo2" id="tipo2" />
            </div>

            <div class="flex flex-col">
                <label for="efecto">Efectos</label>
                <textarea name="efecto" id="efecto" required >{{$hechizo->efecto}}</textarea>
            </div>

            <div class="flex flex-col">
                <label for="turnos">Turnos</label>
                <input type="text" value="{{$hechizo->turnos}}" name="turnos" id="turnos" required />
            </div>

            <div class="flex flex-col">
                <label for="coste">Coste</label>
                <input type="text" value="{{$hechizo->coste}}" name="coste" id="coste"  required>
            </div>

            <x-primary-button class="mt-4 text-center">Actualizar hechizo</x-primary-button>
        </div>
    </form>
</x-app-layout>
