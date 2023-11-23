LISTA DE DEPOSITOS <br>

Codigo de Empleado {{$empleado}}<br>
Codigo de Afiliado {{$afi}} <br>
Nombre Afiliado {{$nombre}}


<a href="/deposito/create/{{$afi}}/{{$nombre}}/{{$empleado}}">Crear deposito</a>

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
        @foreach($datosDeposito as $deposito)

        <tr>
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->nombreafiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->cantidad}}</th>
        </tr>
        @endforeach
    </tbody>

</table>