<h1>Crear Afiliado</h1>

<form action="/afiliado2" class= "form-control" method="POST">
@csrf
<div class="mb-3">
  <label for="" class="form-label">Nombre</label>
  <input type="text" class="form-control" id="nombre" placeholder="Cristiano" name="nombre">
</div>
<div class="mb-3">
  <label for="" class="form-label">Apellido</label>
  <input type="text" class="form-control" id="apellido" placeholder="Ronaldo" name="apellido">
</div>

<div class="mb-3"> 
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/afiliado" class="btn btn-danger">Cancelar</a>

</div>