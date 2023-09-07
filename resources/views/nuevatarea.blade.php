<h2>Añadir nueva tarea</h2>

<form method="post" action="{{ route('tarea.create') }}">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre"><br>

    <label for="fecha_inicio">Fecha de inicio</label>
    <input type="date" name="fecha_inicio" id="fecha_inicio"><br>

    <label for="fecha_fin">Fecha de fin</label>
    <input type="date" name="fecha_fin" id="fecha_fin"><br>

    <label for="asignado_a">Asignado a</label>
    <input type="text" name="asignado_a" id="asignado_a"><br>

    <input type="submit" name="send" value="Guardar Tarea" class="bg-red-200 p-1 cursor-pointer border border-black">
   >
   </form>
</body>