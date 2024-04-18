<x-app-layout>
    <form method="POST" action="{{route('objetos.store')}}">
        @csrf
        <div class="flex w-full justify-center h-full ml-24">
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre"  required /><br/>
            <label>Descripcion</label>
            <input type="text" name="descripcion" id="descripcion"  required /><br/>
            <label>Precio</label>
            <input type="number" name="precio" id="precio"  required /><br/>
            <label>Epoca</label>
            <input type="text" name="epoca" id="epoca"  required /><br/>
        </div>
        <x-primary-button>Crear objeto</x-primary-button>
    </form>
</x-app-layout>
