<x-app-layout>
    <form method="POST" action="{{ route('hechizos.store') }}" class="flex justify-center items-center h-full">
        @csrf
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" required />
            </div>

            <div class="flex flex-col">
                <label for="coste_mp">Coste Mágico</label>
                <input type="text" name="coste_mp" id="coste_mp" required />
            </div>

            <div class="flex flex-col">
                <label for="coste_cordura">Coste Cordura</label>
                <input type="text" name="coste_cordura" id="coste_cordura" required />
            </div>

            <div class="flex flex-col">
                <label for="turnos">Tiempo de ejecucion</label>
                <input type="text" name="turnos" id="turnos"  required>
            </div>

            <div class="flex flex-col">
                <label for="tipo">Tipo</label>
                <input type="text" name="tipo" id="tipo" required />
            </div>

            <div class="flex flex-col">
                <label for="efecto">Efecto</label>
                <textarea rows="4" cols="50" name="efecto" id="efecto" required></textarea>
            </div>

            <div class="flex flex-col">
                <label for="procedencia">Procedencia</label>
                <input type="text" name="procedencia" id="procedencia" required/>
            </div>

            <x-primary-button class="mt-4 text-center">Guardar nuevo hechizo</x-primary-button>
        </div>
    </form>
</x-app-layout>
