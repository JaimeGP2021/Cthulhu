<x-app-layout>
    <form method="POST" action="{{route('libros.update',$libro)}}" class="flex items-center justify-center h-screen">
        @method('PUT')
        @csrf
        <div class="w-full mx-auto mt-4 mb-5 bg-white p-6 rounded-lg shadow-md">
            <form class="w-3/6 mx-auto">
                <label>Titulo</label>
                <input type="text" value="{{$libro->titulo}}" name="titulo" id="titulo" class="block mb-4 w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required /><br>
                <label>Idioma</label>
                <input type="text" value="{{$libro->idioma}}" name="idioma" id="idioma" class="block mb-4 w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required /><br>
                <label>Descripcion</label>
                <textarea name="descripcion" id="descripcion" rows="5" class="block mb-4 w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required >{{ $libro->descripcion ?? '' }}</textarea><br>
                <label>Coste de cordura</label>
                <input type="text" value="{{$libro->coste_cordura}}" name="coste_cordura" id="coste_cordura" class="block mb-4 w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required /><br>
                <label>Tiempo de aprendizaje</label>
                <input type="text" value="{{$libro->coste_tiempo}}" name="coste_tiempo" id="coste_tiempo" class="block mb-4 w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required />
            </form>
        </div>
        <div class="flex justify-center mt-4">
            <x-primary-button class="mx-auto">Editar libro</x-primary-button>
        </div>
    </form>
</x-app-layout>
