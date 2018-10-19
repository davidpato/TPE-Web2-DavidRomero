{include file="header.tpl"}
{include file="nav.tpl"}
<div class="container">

   <h1 id="can">{$Titulo}</h1>



          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Disco</th>
              </tr>
            </thead>
            <tbody>
              {foreach $Canciones item=cancion}
              <tr>
              <th scope="col">{$cancion['c_id']}</th>
              <th scope="col">{$cancion['c_nombre']}</th>
              <th scope="col">{$cancion['c_duracion']}</th>
              <th scope="col">{$cancion['nombre']}</th>
              </tr>
              {/foreach}
            </tbody>
          </table>
         </div>

    {include file="footer.tpl"}
