LISTA DE RETIROS <br>
Codigo de Empleado {{$empleado}} <br>
Codigo de Afiliado {{$afi}} <br>
Nombre del Afiliazo {{$nombre}}

<a href="/retiro/create/{{$afi}}/{{$nombre}}/{{$empleado}}">Crear Retiro</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Id_Empleado</th>
        <th>Id_Afiliado</th>
        <th>Nombre_Afiliado</th>
        <th>Fechas</th>
        <th>Cantidad</th>
    </tr>
    </thead>

    <tbody>
        @foreach($datosRetiro as $retiro)

        <tr>
            <th>{{$retiro->id}}</th>
            <th>{{$retiro->codempleado}}</th>
            <th>{{$retiro->codafiliado}}</th>
            <th>{{$retiro->nombreafiliado}}</th>
            <th>{{$retiro->fecha}}</th>
            <th>{{$retiro->cantidad}}</th>
        </tr>
        @endforeach
    </tbody>

</table>