<x-app-layout>
    <form method="POST" action="{{route('personajes.store')}}">
        @csrf
    <div class="flex w-full justify-center h-full">

        <div class="ml-24">
            <label>ID jugador</label>
            <input type="text" name="user_id" id="user_id" required /><br/>
            <label>Nombre</label>
            <input type="text" name="nombre" id="nombre"  required /><br/>
            <label>Profesion</label>
            <input type="text" name="profesion" id="profesion"  required /><br/>
            <label>Edad</label>
            <input type="number" name="edad" id="edad"  required /><br/>
            <label>Nacionalidad</label>
            <input type="text" name="nacionalidad" id="nacionalidad"  required /><br/>
            <label>Estudios</label>
            <input type="text" name="estudios" id="estudios" required /><br/>
            <label>Ingresos</label>
            <input type="number" name="ingresos" id="ingresos" /><br/>
            <label>Ahorros</label>
            <input type="number" name="ahorros" id="ahorros" /><br/>
            <label>Efectivo</label>
            <input type="number" name="efectivo" id="efectivo" >
        </div>
        <div clas="mr-24">
            <label>FUE</label>
            <input type="number" name="fue" id="fue"  required /><br/>
            <label>CON</label>
            <input type="number" name="con" id="con"  required /><br/>
            <label>DES</label>
            <input type="number" name="des" id="des"  required /><br/>
            <label>TAM</label>
            <input type="number" name="tam" id="tam"  required /><br/>
            <label>APA</label>
            <input type="number" name="apa" id="apa"  required /><br/>
            <label>INT</label>
            <input type="number" name="int" id="int"  required /><br/>
            <label>POD</label>
            <input type="number" name="pod" id="pod"  required /><br/>
            <label>EDU</label>
            <input type="number" name="edu" id="edu"  required /><br/>
            <label>COR</label>
            <input type="number" name="cor" id="cor"  required /><br/>
            <label>Cordura</label>
            <input type="number" name="cordura" id="cordura"  required />
        </div>
    </div>
    <x-primary-button>Crear personaje</x-primary-button>

</form>
</div>
</x-app-layout>
