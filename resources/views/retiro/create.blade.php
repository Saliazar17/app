CREAR RETIRO <br>
{{$id1}} <br>
{{$id2}} {{$nombrea}}<br>



<form action="/retiro"class= "form-control"method ="POST">
   @csrf
 <label for="">codigo empleado</label>
 <input type="text" id="codigoEmpleado" value="{{$id2}}" name="codempleado"> <br>

 <label for="">Codigo afiliado</label>
 <input type="text" id="codigoAfiliado" value="{{$id1}}"name="codafiliado"> <br>

 <label for="">Nombre afiliado</label>
 <input type="text" id="nombreafi" value="{{$nombrea}}" name="nombreafiliado" > <br>

 <label for="">Fecha</label>
 <input type="text" id="fecha" placeholder="2023-11-08" name="fecha" > <br>

 <label for="">Cantidad</label>
 <input type="text" id="cantidad" placeholder="2000" name="cantidad" >


 <div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/empleado" class="btn btn-danger">Cancelar</a>

 </div>



</form>