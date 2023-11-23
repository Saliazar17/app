Lista de Afiliados <br>
Codigo del Empleado {{$empleado}} <br>
<a href="/afiliado2/create/">Crear Afiliado</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>
            Acciones
        </th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosAfiliado as $afiliado)

        <tr>
            <th>{{$afiliado->id}}</th>
            <th>{{$afiliado->nombre}}</th>
            <th>{{$afiliado->apellido}}</th>
            <th><a href="/deposito/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Deposito</a></th>
            <th><a href="/retiro/{{$empleado}}/{{$afiliado->id}}/{{$afiliado->nombre}}">Retiro</a></th>
        </tr>
        @endforeach
    </tbody>

</table>