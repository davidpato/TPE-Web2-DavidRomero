{include file="header.tpl"}

 <div class="container">
   {include file="nav.tpl"}
   <div class="row">
       <div class="col-3"></div>
       <div class="col-3"><h1 id="disc">{$Titulo}</h1></div>
       <div class="col-3"></div>
   </div>

   <div class="row">
     <h2 id="disc">Discos</h2>
     <table class="table" >
     <thead>
       <tr>
         <th scope="col">id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Descripcion</th>
         <th scope="col">Modificar</th>
       </tr>
     </thead>
     <tbody>
       {foreach $Discografia item=disco}
       <tr>
       <th scope="col">{$disco['id']}</th>
       <th scope="col">{$disco['nombre']}</th>
       <th scope="col">{$disco['descripcion']}</th>
       <th><a href="borrardisco/{$disco['id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">BORRAR</button></a><a href="editardisco/{$disco['id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">EDITAR</button></a></th>
       </tr>
       {/foreach}
     </tbody>
   </table></div>

    <h2 id="disc">Canciones</h2>

    <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Duracion</th>
        <th scope="col">Disco</th>
        <th scope="col">BORRAR</th>
      </tr>
    </thead>
    <tbody>
      {foreach $Canciones item=cancion}
      <tr>
      <th scope="col">{$cancion['c_id']}</th>
      <th scope="col">{$cancion['c_nombre']}</th>
      <th scope="col">{$cancion['c_duracion']}</th>
      <th scope="col">{$cancion['nombre']}</th>
      <th><a href="borrarcancion/{$cancion['c_id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">BORRAR</button></a><a href="editarcancion/{$cancion['c_id']}"><button type="button" class="btn btn-secondary btn-sm" id="but">EDITAR</button></a></th>
      </tr>
      {/foreach}
    </tbody>
  </table>

<div class="row">
  <div class="col-6"><div class="container">
    <h2 id="disc">Formulario</h2>
        <form method="post" action="agregar">
           <div class="form-group">
             <label for="tituloForm">Titulo</label>
             <input type="text" class="form-control" id="tituloForm" name="tituloForm">
           </div>
           <div class="form-group">
             <label for="descripcionForm">Descripcion</label>
             <input type="text" class="form-control" id="descripcionForm" name="descripcionForm">
           </div>
         <button type="submit" class="btn btn-primary" id="but">Crear Disco</button>
       </form>
  </div></div>
  <div class="col-6">
     <div class="container">
      <h2 id="disc">Crear cancion</h2>
          <form method="post" action="insertarcancion">
             <div class="form-group">
               <label for="nombreForm" id="title">Nombre</label>
               <input type="text" class="form-control" id="nombreForm" name="nombreForm">
             </div>
             <div class="form-group">
               <label for="duracionForm" id="title">Duracion</label>
               <input type="text" class="form-control" id="duracionForm" name="duracionForm">
             </div>
             <div class="form-group">
                <label for="sel1" id="title" >Seleccionar disco</label>
                <select class="form-control" id="discoForm" name="discoForm">
                  {foreach $Datos item=dato}
                  <option value="{$dato['id']}">{$dato['nombre']}</option>
                  {/foreach}
                </select>
              </div>
           <button type="submit" class="btn btn-primary" id="but">Crear Cancion</button>
         </form>
         </div></div>
        </div>
      </div>

       <div class="container">
         <h2 id="disc">Crear Usuario</h2>
           <form method="post" action="agregarusuario">
             <div class="form-group">
               <label for="nombreForm" id="title">Nombre de Usuario</label>
               <input type="text" class="form-control" id="nombreUser" name="nombreUser">
             </div>
             <div class="form-group">
               <label for="exampleInputPassword1">Password</label>
               <input type="password" class="form-control" id="passUser" name="passUser" placeholder="Password">
             </div>
             <button type="submit" class="btn btn-primary">Crear</button>
            </form>
          </div>


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


{include file="footer.tpl"}
