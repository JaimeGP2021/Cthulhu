<x-app-layout>
    <form class="inline w-5/6" method="POST" action="{{route('objetos.update',$objeto)}}" class="flex items-center justify-center h-screen">
        @method('PUT')
        @csrf
        <div class="w-5/6  mx-auto bg-white p-2 rounded-lg shadow-md">
                <label>Nombre</label>
                <input type="text" value="{{$objeto->nombre}}" name="nombre" id="nombre" class="block w-full px-4 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required /><br>
                <label>Descripcion</label>
                <textarea name="descripcion" id="descripcion" rows="5" class="block w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required >{{ $objeto->descripcion ?? '' }}</textarea><br>
                <label>Precio</label>
                <input type="text" value="{{$objeto->precio}}" name="precio" id="precio" class="block w-full px-4 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required /><br>
                <label>Epoca</label>
                <input type="text" value="{{$objeto->epoca}}" name="epoca" id="epoca" class="block w-full px-4 rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required />
        </div>
        <div class="flex justify-center mt-4">
            <x-primary-button class="mx-auto">Editar objeto</x-primary-button>
        </div>
    </form>
</x-app-layout>
