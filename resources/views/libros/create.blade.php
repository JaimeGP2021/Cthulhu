<x-app-layout>
    <form method="POST" action="{{ route('libros.store') }}" class="flex justify-center items-center h-full">
        @csrf
        <div class="flex flex-col space-y-4">
            <div class="flex flex-col">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" required />
            </div>

            <div class="flex flex-col">
                <label for="idioma">Idioma</label>
                <input type="text" name="idioma" id="idioma" required />
            </div>

            <div class="flex flex-col">
                <label for="descripcion">Descripcion</label>
                <textarea name="descripcion" id="descripcion" required ></textarea>
            </div>

            <div class="flex flex-col">
                <label for="coste_cordura">Coste Cordura</label>
                <input type="text" name="coste_cordura" id="coste_cordura" required />
            </div>

            <div class="flex flex-col">
                <label for="coste_tiempo">Coste tiempo</label>
                <input type="text" name="coste_tiempo" id="coste_tiempo"  required>
            </div>

            <x-primary-button class="mt-4 text-center">Guardar nuevo libro</x-primary-button>
        </div>
    </form>
</x-app-layout>
